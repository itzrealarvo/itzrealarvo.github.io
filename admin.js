/*
  admin.js: hidden edit mode for itzrealarvo.github.io

  How it works
  - Press Ctrl+Shift+E (or open the site with #admin on the end of the link).
  - Type the PIN. If it's right, edit mode turns on.
  - Click any text to change it. Alt+click a link to change where it goes.
  - Press "Download updated page", then upload the downloaded index.html to GitHub.

  NOTE: the PIN below is visible to anyone who views this file, so it is a light
  lock only. Real security needs accounts and a server, which can come later.
*/
(function () {
  "use strict";

  var PIN = "6716";   // <-- CHANGE THIS to your own PIN
  var HOTKEY = "E";   // Ctrl + Shift + this letter

  // Text that can be edited. Merch sketches are drawn by script, so they are not included.
  var EDITABLE = [
    "h1", ".lede", ".eyebrow > span", "h2", ".name", ".what",
    ".pay-head h3", ".pay p", "#mc-name", "#mail-addr",
    ".soon-title", ".soon-text", ".first-look p", "footer span"
  ].join(",");

  var editing = false;
  var dirty = false;
  var fails = 0;
  var lockUntil = 0;

  // Styles for the popup and toolbar. Marked so they are left out of the export.
  var css = document.createElement("style");
  css.setAttribute("data-admin-ui", "");
  css.textContent =
    ".adm-overlay{position:fixed;inset:0;z-index:9999;background:rgba(0,0,0,.78);display:grid;place-items:center;padding:1rem}" +
    ".adm-box{background:var(--raised,#0d0d0f);border:2px solid var(--line-strong,#4a4a52);border-radius:.25rem;padding:1.25rem;width:min(100%,20rem);display:grid;gap:.8rem;color:var(--fg,#f4f4f2);font-family:var(--body,system-ui,sans-serif)}" +
    ".adm-box h3{margin:0;font-family:var(--display,monospace);font-size:1rem;letter-spacing:.08em;text-transform:uppercase}" +
    ".adm-box input{font:inherit;font-family:var(--mono,monospace);font-size:1.1rem;letter-spacing:.2em;padding:.6rem .7rem;background:var(--bg,#050505);color:inherit;border:2px solid var(--line-strong,#4a4a52);border-radius:.2rem;width:100%}" +
    ".adm-box input:focus{outline:3px solid var(--accent,#5aa9ff);outline-offset:2px}" +
    ".adm-msg{margin:0;min-height:1.2em;color:#ff7a7a;font-size:.9rem}" +
    ".adm-row{display:flex;gap:.5rem;flex-wrap:wrap}" +
    ".adm-btn{font-family:var(--display,monospace);font-weight:700;font-size:.8rem;letter-spacing:.08em;text-transform:uppercase;background:var(--fg,#f4f4f2);color:var(--bg,#050505);border:2px solid var(--fg,#f4f4f2);border-radius:.2rem;padding:.6rem .9rem;cursor:pointer}" +
    ".adm-btn:hover{background:var(--accent,#5aa9ff);border-color:var(--accent,#5aa9ff);color:var(--accent-ink,#04101f)}" +
    ".adm-btn.alt{background:transparent;color:var(--fg,#f4f4f2);border-color:var(--line-strong,#4a4a52)}" +
    ".adm-btn:focus-visible{outline:3px solid var(--accent,#5aa9ff);outline-offset:2px}" +
    ".adm-bar{position:fixed;left:0;right:0;bottom:0;z-index:9998;display:flex;flex-wrap:wrap;gap:.5rem 1rem;align-items:center;justify-content:space-between;padding:.7rem 1rem;background:var(--raised,#0d0d0f);border-top:2px solid var(--accent,#5aa9ff);color:var(--fg,#f4f4f2);font-family:var(--body,system-ui,sans-serif);font-size:.9rem}" +
    "[data-admin-edit]{outline:1px dashed rgba(90,169,255,.7);outline-offset:3px;cursor:text;-webkit-user-select:text!important;user-select:text!important}" +
    "[data-admin-edit]:focus{outline:2px solid #5aa9ff}";
  document.head.appendChild(css);

  function clearAdminHash() {
    if (location.hash === "#admin") {
      history.replaceState(null, "", location.pathname + location.search);
    }
  }

  function askPin() {
    if (document.querySelector(".adm-overlay")) return;
    var o = document.createElement("div");
    o.className = "adm-overlay";
    o.setAttribute("data-admin-ui", "");
    o.innerHTML =
      '<div class="adm-box" role="dialog" aria-modal="true" aria-label="Enter PIN">' +
      "<h3>Enter PIN</h3>" +
      '<input type="password" autocomplete="off" aria-label="PIN">' +
      '<p class="adm-msg" role="alert"></p>' +
      '<div class="adm-row"><button class="adm-btn" type="button">Unlock</button>' +
      '<button class="adm-btn alt" type="button">Cancel</button></div></div>';
    document.body.appendChild(o);

    var input = o.querySelector("input");
    var msg = o.querySelector(".adm-msg");
    var btns = o.querySelectorAll("button");

    function close() { o.remove(); clearAdminHash(); }

    function submit() {
      var now = Date.now();
      if (now < lockUntil) {
        msg.textContent = "Too many tries. Wait " + Math.ceil((lockUntil - now) / 1000) + "s.";
        return;
      }
      if (input.value === PIN) {
        fails = 0;
        close();
        startEdit();
        return;
      }
      input.value = "";
      fails++;
      if (fails >= 5) {
        fails = 0;
        lockUntil = Date.now() + 30000;
        msg.textContent = "Too many tries. Wait 30s.";
      } else {
        msg.textContent = "Wrong PIN.";
      }
    }

    btns[0].addEventListener("click", submit);
    btns[1].addEventListener("click", close);
    o.addEventListener("keydown", function (e) {
      if (e.key === "Enter" && e.target === input) { e.preventDefault(); submit(); }
      else if (e.key === "Escape") { close(); }
    });
    o.addEventListener("mousedown", function (e) { if (e.target === o) close(); });
    input.focus();
  }

  function startEdit() {
    if (editing) return;
    editing = true;

    document.querySelectorAll(EDITABLE).forEach(function (n) {
      n.setAttribute("contenteditable", "true");
      n.setAttribute("data-admin-edit", "");
    });

    var bar = document.createElement("div");
    bar.className = "adm-bar";
    bar.setAttribute("data-admin-ui", "");
    bar.innerHTML =
      "<span>Edit mode: click any text to change it. Alt+click a link to change its URL.</span>" +
      '<span class="adm-row">' +
      '<button class="adm-btn" type="button" data-a="save">Download updated page</button>' +
      '<button class="adm-btn alt" type="button" data-a="exit">Exit</button></span>';
    bar.addEventListener("click", function (e) {
      var a = e.target.getAttribute && e.target.getAttribute("data-a");
      if (a === "save") download();
      if (a === "exit") stopEdit();
    });

    var spacer = document.createElement("div");
    spacer.setAttribute("data-admin-ui", "");
    spacer.style.height = "6rem";

    document.body.appendChild(spacer);
    document.body.appendChild(bar);
  }

  function stopEdit() {
    editing = false;
    document.querySelectorAll("[data-admin-edit]").forEach(function (n) {
      n.removeAttribute("contenteditable");
      n.removeAttribute("data-admin-edit");
    });
    document.querySelectorAll(".adm-bar, [data-admin-ui]:not(style)").forEach(function (n) { n.remove(); });
  }

  // Build a clean copy of the page: no editing marks, no admin UI, and the parts
  // that the page's own script draws on load are emptied so they are not drawn twice.
  function buildHtml() {
    var clone = document.documentElement.cloneNode(true);
    clone.querySelectorAll("[data-admin-ui]").forEach(function (n) { n.remove(); });
    clone.querySelectorAll("[data-admin-edit]").forEach(function (n) {
      n.removeAttribute("contenteditable");
      n.removeAttribute("data-admin-edit");
    });
    var goods = clone.querySelector("#goods");
    if (goods) goods.innerHTML = "";
    clone.querySelectorAll("[data-donut]").forEach(function (n) { n.innerHTML = ""; });
    ["copy-btn", "copy-email"].forEach(function (id) {
      var b = clone.querySelector("#" + id);
      if (b) b.textContent = "Copy";
    });
    var pl = clone.querySelector("#panel-links");
    var ps = clone.querySelector("#panel-shop");
    if (pl) pl.removeAttribute("hidden");
    if (ps) ps.setAttribute("hidden", "");
    clone.querySelectorAll("[data-tab]").forEach(function (t) {
      var on = t.getAttribute("data-tab") === "links";
      t.classList.toggle("on", on);
      t.removeAttribute("aria-current");
    });
    return "<!doctype html>\n" + clone.outerHTML + "\n";
  }

  function download() {
    var blob = new Blob([buildHtml()], { type: "text/html" });
    var url = URL.createObjectURL(blob);
    var a = document.createElement("a");
    a.href = url;
    a.download = "index.html";
    document.body.appendChild(a);
    a.click();
    a.remove();
    setTimeout(function () { URL.revokeObjectURL(url); }, 1000);
    dirty = false;
  }

  // Hotkey: Ctrl+Shift+E opens the PIN box, or leaves edit mode if it's already on.
  document.addEventListener("keydown", function (e) {
    if (e.ctrlKey && e.shiftKey && !e.altKey && e.code === "Key" + HOTKEY) {
      e.preventDefault();
      if (editing) stopEdit(); else askPin();
      return;
    }
    if (editing && e.key === "Enter" && e.target.closest && e.target.closest("[data-admin-edit]")) {
      e.preventDefault(); // keep each text on one line
    }
  });

  // Keep pasted text plain.
  document.addEventListener("paste", function (e) {
    if (!editing || !e.target.closest || !e.target.closest("[data-admin-edit]")) return;
    e.preventDefault();
    var t = (e.clipboardData || window.clipboardData).getData("text/plain").replace(/\s+/g, " ");
    document.execCommand("insertText", false, t);
  });

  document.addEventListener("input", function (e) {
    if (editing && e.target.closest && e.target.closest("[data-admin-edit]")) dirty = true;
  });

  // In edit mode, links don't open. Alt+click changes the link's URL instead.
  document.addEventListener("click", function (e) {
    if (!editing || !e.target.closest) return;
    var a = e.target.closest("a[href]");
    if (!a || a.hasAttribute("data-tab") || a.closest("[data-admin-ui]")) return;
    e.preventDefault();
    if (e.altKey) {
      var v = window.prompt("Link URL:", a.getAttribute("href"));
      if (v !== null && v.trim()) { a.setAttribute("href", v.trim()); dirty = true; }
    }
  }, true);

  window.addEventListener("beforeunload", function (e) {
    if (dirty) { e.preventDefault(); e.returnValue = ""; }
  });

  // Backup way in (works on phones too): open the site with #admin on the end.
  function checkHash() { if (location.hash === "#admin") askPin(); }
  window.addEventListener("hashchange", checkHash);
  checkHash();
})();
