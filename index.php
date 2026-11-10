<!DOCTYPE html>
<html lang="en">

<head>


  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description"
    content="Mofi admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
<meta name="keywords"
    content="admin template, Mofi admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="ucan">
<link rel="icon" href="../assets/images/favicon.png?dummy=2" type="image/x-icon">
<link rel="shortcut icon" href="../assets/images/favicon.png?dummy=2" type="image/x-icon">
<title>منصة مدارس التعلم ثنائي اللغة</title>
<script>
// Listen for popstate events
window.addEventListener('popstate', (event) => {
    // Optionally handle any specific logic when navigating back
});

// Handle before the user unloads the page
window.onbeforeunload = (event) => {
    // Remove the replaceState to avoid clearing the state unnecessarily
    // If you need to reset the form, keep this line; otherwise, you can remove it
    document.forms[0]?.reset(); // Reset the form data if needed
};

// Preventing default behavior on anchor clicks (if necessary)
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (event) => {
        event.preventDefault();
        const targetId = anchor.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);
        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
            // You can also use history.pushState if you want to change the URL
            // history.pushState(null, null, '#' + targetId);
        }
    });
});

function getExCookie(name) {
    let cookieArr = document.cookie.split(";");

    for (let i = 0; i < cookieArr.length; i++) {
        let cookiePair = cookieArr[i].trim().split("=");

        if (cookiePair[0] === name) {
            return decodeURIComponent(cookiePair[1]);
        }
    }

    return null;
}

function checkBananUserTypeCookie() {
    const cookieValue = getExCookie("Banan_UserType");

    if (!cookieValue) {
        // If the cookie Banan_UserType is not found, redirect to the generated PHP link

        location.href = "https://banan-bls.com";
    } else {
        console.log("Banan_UserType cookie exists with value: " + cookieValue);
    }
}
</script>

<script>
document.documentElement.lang = "ar";
document.documentElement.dir  = "rtl";
document.documentElement.setAttribute("translate","no");
</script>
  <!-- Google font-->
  <!-- Google font-->
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.css">
  <!-- ico-font-->
  <!-- ico-font-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/feather-icon.css">  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
  <!-- <link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css?ver=1.28">-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/slick-theme.css">
<!--<link rel="stylesheet" type="text/css" href="../assets/css/vendors/scrollbar.css">-->
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/datatables.css">
<link rel="stylesheet" type="text/css" href="../assets/css/vendors/date-range-picker/flatpickr.min.css">  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../assets/css/vendors/bootstrap.css?ver=1.19">

<!-- App css-->
<link rel="stylesheet" type="text/css" href="../assets/css/style.css?v=1.519">
<!--<link id="color" rel="stylesheet" href="../assets/css/color-1.css" media="screen">-->
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css?ver=1.27">
<!-- تم تغيير فيرجن الملف 21-6-2026-->
<link rel="stylesheet" type="text/css" href="../assets/css/printnew.css?ver=1.33">

    <script>
        function FillDateCookies(str1) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText != '') {
                        if (document.getElementsByName('sc1xxnnnn')) {
                            var fields = document.getElementsByName('sc1xxnnnn');
                            for (var i = 0; i < fields.length; i++) {
                                // Create a new script element
                                var script = document.createElement('script');
                                script.textContent = fields[i].innerHTML;

                                // Append the script to the document to execute it
                                document.body.appendChild(script);

                                // Call the specific function after the script is executed
                                if (typeof callajax === 'function') {
                                    callajax();
                                } else {
                                    console.log('callajax is not defined');
                                }

                                console.log("here1");
                                console.log(this.responseText);

                            }

                        }
                        // window.location.reload();
                    }
                }
            };
            xmlhttp.open("GET", "../ControlPanel/AjaxPages/PrepareCookiesDate.php", true);
            xmlhttp.send();
        }

        setInterval(FillDateCookies, 4 * 60 * 60 * 1000);

        function ShowCountAlert() {
            if (document.getElementsByName('BrfCount2')) {
                var ReturnValue = "";

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {

                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText.trim() != '') {

                            document.getElementById("BrfCount2").innerHTML = this.responseText.trim();

                        }

                    }

                };

                xmlhttp.open("GET", "https://banan-bls.com/ControlPanel/AjaxPages/ShowCountAlertAjax1.php", true);

                xmlhttp.send();
            }

        }
        const calledDetatials_Notify = new Set();

        function ShowDetailsAlert() {
            var BrfCount2 = document.getElementById('BrfCount2').innerText;
            const key = `Notify_${BrfCount2}`;
            if (calledDetatials_Notify.has(key) == false) {
                var ReturnValue = "";

                var xmlhttp = new XMLHttpRequest();

                xmlhttp.onreadystatechange = function() {

                    if (this.readyState == 4 && this.status == 200) {

                        if (this.responseText.trim() != '') {

                            document.getElementById("BrfNTF").innerHTML = this.responseText;

                        }

                    }

                };

                xmlhttp.open("GET", "https://banan-bls.com/ControlPanel/AjaxPages/ShowDetailsAlertAjax1.php", true);

                xmlhttp.send();
            }
            calledDetatials_Notify.add(key);


        }
        
          //  setInterval(ShowCountAlert, 30000);
        
        function UpdateDetailsAlert(str1) {

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if (this.responseText.trim() != '') {

                    }
                }
            };
            xmlhttp.open("GET", "https://banan-bls.com/ControlPanel/AjaxPages/ShowDetailsAlertUpdateAjax1.php?notifycode=" + str1, true);
            xmlhttp.send();

        }
                document.addEventListener('readystatechange', function() {
            if (document.readyState === 'complete') {
                FillDateCookies();
                
                    ShowCountAlert();
                                                // call your function here
            }
        });
    </script>


<script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-app-compat.js"></script>
<!-- Firebase Messaging — للإشعارات فقط (Auth/Database لم يعد لهما استخدام في نسخة WebSocket) -->
<script src="https://www.gstatic.com/firebasejs/9.23.0/firebase-messaging-compat.js"></script>
<!-- Pusher SDK مستضاف محليًا — الاعتماد على js.pusher.com يفشل في شبكات تحجب الـ CDN فيتوقف الزمن الحقيقي كليًا -->
<script src="pusher.min.js"></script>
<script src="ChatRealtime.js?v=20260930bc"></script>

<script>
    // إعداد Firebase (FCM فقط)
    // 🔒 كل التعريفات var محمية بـ typeof — لا تستخدم const هنا أبدًا:
    // لو حُمِّلت الصفحة ملف تهيئة سابقًا (ChatRealtimeBoot) فأي const مكرر
    // يرمي SyntaxError يقتل السكربت بالكامل (var + const لنفس الاسم ممنوع).
    if (typeof firebaseConfig === 'undefined') {
        var firebaseConfig = {"apiKey":"AIzaSyAd4RYjnLs9gP6Q21EUGeFPR4itjxJHejk","authDomain":"blschatsystem.firebaseapp.com","databaseURL":"https://blschatsystem-default-rtdb.firebaseio.com","projectId":"blschatsystem","storageBucket":"blschatsystem.firebasestorage.app","messagingSenderId":"632685110030","appId":"1:632685110030:web:648d06375ff015e7c2ad5f","measurementId":"G-CZZWRQS1LR"};
    }
    // تسجيل Service Worker من مجلد privatefiles
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('Services/CommunicationForums/privatefiles/firebase-messaging-sw.js')
            .then((registration) => {
                console.log('Service Worker registered successfully:', registration.scope);
            })
            .catch((error) => {
                console.error('Service Worker registration failed:', error);
            });
    }
    if (typeof VIPIKey === 'undefined') {
        var VIPIKey = 'BNCw2aNSXzCB1mFA2I8N9F53wN4kOG4ZLl0Nne0AvFGRCTzM8ONADeldx_SNaEFi94dsPsygIdoZsp6MctMwunM';
    }
    if (typeof firebase !== 'undefined' && firebase.initializeApp && !firebase.apps.length) {
        firebase.initializeApp(firebaseConfig);
    }

    if (typeof messaging === 'undefined') {
        var messaging = (typeof firebase !== 'undefined' && firebase.messaging && firebase.apps.length)
            ? firebase.messaging() : null;
    }

    // إعدادات خادم Soketi — بدون السر (يُستخدم من طرف السيرفر فقط)
    if (typeof WS_CONFIG === 'undefined') {
        var WS_CONFIG = {"appKey":"ee74517df5d6aebb3a3c0f31bed84202","wsHost":"socket.banan-bls.com","wsPort":80,"wssPort":443,"forceTLS":true};
    }
    if (typeof ChatRealtime !== 'undefined' && !ChatRealtime.isInited()) {
        ChatRealtime.init(WS_CONFIG);
    }


    // ===========================================
    // 🔥 الجزء الثاني: استقبال الإشعارات
    // ===========================================


    // ===========================================
    // 🎨 إضافة الـ CSS للإشعارات
    // ===========================================
    const notificationStyles = `
    <style id="notificationXX-styles">
        .notificationXX-container {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 10000;
            max-width: 380px;
            width: 100%;
            pointer-events: none;
        }

        .beautiful-notificationXX {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            transform: translateX(100%);
            opacity: 0;
            animation: slideInNotification 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
            pointer-events: all;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .beautiful-notificationXX::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 4px;
            height: 100%;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }

        .beautiful-notificationXX.success::before {
            background: linear-gradient(45deg, #4CAF50, #45a049);
        }

        .beautiful-notificationXX.warning::before {
            background: linear-gradient(45deg, #FF9800, #F57C00);
        }

        .beautiful-notificationXX.error::before {
            background: linear-gradient(45deg, #f44336, #d32f2f);
        }

        .beautiful-notificationXX.info::before {
            background: linear-gradient(45deg, #2196F3, #1976D2);
        }

        .notificationXX-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 12px;
        }

        .notificationXX-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 18px;
            margin-left: 12px;
            background: var(--theme-default);
            flex-shrink: 0;
        }

        .beautiful-notificationXX.success .notificationXX-icon {
            background: linear-gradient(45deg, #4CAF50, #45a049);
        }

        .beautiful-notificationXX.warning .notificationXX-icon {
            background: linear-gradient(45deg, #FF9800, #F57C00);
        }

        .beautiful-notificationXX.error .notificationXX-icon {
            background: linear-gradient(45deg, #f44336, #d32f2f);
        }

        .beautiful-notificationXX.info .notificationXX-icon {
            background: linear-gradient(45deg, #2196F3, #1976D2);
        }

        .notificationXX-content {
            flex: 1;
            min-width: 0;
        }

        .notificationXX-title {
            font-size: 16px;
            font-weight: 600;
            color: #333;
            margin-bottom: 4px;
            line-height: 1.3;
        }

        .notificationXX-body {
            color: #555;
            font-size: 14px;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .notificationXX-time {
            font-size: 11px;
            color: #888;
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .notificationXX-close {
            background: none;
            border: none;
            font-size: 18px;
            color: #999;
            cursor: pointer;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            flex-shrink: 0;
            margin-right: 8px;
        }

        .notificationXX-close:hover {
            background: rgba(0, 0, 0, 0.1);
            color: #666;
            transform: scale(1.1);
        }

        .notificationXX-progress {
            position: absolute;
            bottom: 0;
            right: 0;
            height: 3px;
            background: var(--theme-default);
            border-radius: 0 0 16px 0;
            animation: progressBar 5s linear forwards;
        }

        .beautiful-notificationXX.success .notificationXX-progress {
            background: linear-gradient(45deg, #4CAF50, #45a049);
        }

        .beautiful-notificationXX.warning .notificationXX-progress {
            background: linear-gradient(45deg, #FF9800, #F57C00);
        }

        .beautiful-notificationXX.error .notificationXX-progress {
            background: linear-gradient(45deg, #f44336, #d32f2f);
        }

        .beautiful-notificationXX.info .notificationXX-progress {
            background: linear-gradient(45deg, #2196F3, #1976D2);
        }

        .notificationXX-actions {
            display: flex;
            gap: 8px;
            margin-top: 12px;
            justify-content: flex-end;
        }

        .notificationXX-btn {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .notificationXX-btn.primary {
            background: var(--theme-default);
            color: white;
        }

        .notificationXX-btn.secondary {
            background: rgba(0, 0, 0, 0.05);
            color: #666;
        }

        .notificationXX-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        @keyframes slideInNotification {
            from {
                transform: translateX(100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideOutNotification {
            from {
                transform: translateX(0);
                opacity: 1;
                max-height: 200px;
                margin-bottom: 12px;
            }
            to {
                transform: translateX(100%);
                opacity: 0;
                max-height: 0;
                margin-bottom: 0;
                padding: 0;
            }
        }

        @keyframes progressBar {
            from { width: 100%; }
            to { width: 0%; }
        }

        .beautiful-notificationXX.removing {
            animation: slideOutNotification 0.4s ease forwards;
        }

        @media (max-width: 480px) {
            .notificationXX-container {
                right: 10px;
                left: 10px;
                max-width: none;
            }
            
            .beautiful-notificationXX {
                padding: 16px;
            }
            
            .notificationXX-icon {
                width: 35px;
                height: 35px;
                font-size: 16px;
            }
            
            .notificationXX-title {
                font-size: 14px;
            }
            
            .notificationXX-body {
                font-size: 13px;
            }
        }
    </style>
    `;

    // ===========================================
    // 🚀 الفانكشن الرئيسي لعرض الإشعارات
    // ===========================================
    function showBeautifulNotification(options = {}) {
        // إضافة الـ styles إذا لم تكن موجودة
        if (!document.getElementById('notificationXX-styles')) {
            document.head.insertAdjacentHTML('beforeend', notificationStyles);
        }
        
        // إنشاء أو جلب الـ container
        let container = document.querySelector('.notificationXX-container');
        if (!container) {
            container = document.createElement('div');
            container.className = 'notificationXX-container';
            document.body.appendChild(container);
        }
        
        // إعدادات افتراضية
        const settings = {
            title: options.title || 'إشعار جديد',
            body: options.body || 'محتوى الإشعار',
            type: options.type || 'info', // success, warning, error, info
            icon: options.icon || getDefaultIcon(options.type || 'info'),
            duration: options.duration || 5000,
            showProgress: options.showProgress !== false,
            showTime: options.showTime !== false,
            closable: options.closable !== false,
            actions: options.actions || null, // [{text: 'موافق', action: function() {}}]
            onClick: options.onClick || null,
            onClose: options.onClose || null
        };
        
        // إنشاء عنصر الإشعار
        const notification = document.createElement('div');
        notification.className = `beautiful-notificationXX ${settings.type}`;
        
        // تحديد الوقت الحالي
        const now = new Date();
        const timeString = now.toLocaleTimeString('ar-EG', { 
            hour: '2-digit', 
            minute: '2-digit',
            hour12: false 
        });
        
        // بناء الـ HTML
        notification.innerHTML = `
            <div class="notificationXX-header">
                <div class="notificationXX-icon">${settings.icon}</div>
                <div class="notificationXX-content">
                    <div class="notificationXX-title">${settings.title}</div>
                    <div class="notificationXX-body">${settings.body}</div>
                    ${settings.showTime ? `<div class="notificationXX-time">🕐 ${timeString}</div>` : ''}
                </div>
                ${settings.closable ? '<button class="notificationXX-close" onclick="this.closest(\'.beautiful-notificationXX\').remove()">×</button>' : ''}
            </div>
            ${settings.actions ? createActionButtons(settings.actions) : ''}
            ${settings.showProgress ? '<div class="notificationXX-progress"></div>' : ''}
        `;
        
        // إضافة event listeners
        if (settings.onClick) {
            notification.style.cursor = 'pointer';
            notification.addEventListener('click', (e) => {
                if (!e.target.closest('.notificationXX-close') && !e.target.closest('.notificationXX-actions')) {
                    settings.onClick(notification);
                }
            });
        }
        
        // إضافة الإشعار للـ container
        container.appendChild(notification);
        
        // إزالة تلقائية بعد المدة المحددة
        if (settings.duration > 0) {
            setTimeout(() => {
                removeNotification(notification, settings.onClose);
            }, settings.duration);
        }
        
        // تشغيل صوت (اختياري)
        if (options.playSound !== false) {
            playNotificationSound(settings.type);
        }
        
        return notification;
    }

    // ===========================================
    // 🔧 وظائف مساعدة
    // ===========================================

    // الحصول على الأيقونة الافتراضية حسب النوع
    function getDefaultIcon(type) {
        const icons = {
            success: '✓',
            warning: '⚠',
            error: '✕',
            info: 'ℹ',
            message: '💬',
            user: '👤',
            system: '⚙'
        };
        return icons[type] || icons.info;
    }

    // إنشاء أزرار الأكشن
    function createActionButtons(actions) {
        if (!actions || !Array.isArray(actions)) return '';
        
        const buttonsHtml = actions.map(action => 
            `<button class="notificationXX-btn ${action.type || 'secondary'}" 
                    onclick="(${action.action.toString()})(this)">${action.text}</button>`
        ).join('');
        
        return `<div class="notificationXX-actions">${buttonsHtml}</div>`;
    }

    // إزالة الإشعار مع أنيميشن
    function removeNotification(notification, onClose) {
        if (!notification || !notification.parentElement) return;
        
        notification.classList.add('removing');
        
        setTimeout(() => {
            if (notification.parentElement) {
                notification.remove();
                if (onClose) onClose();
            }
        }, 400);
    }

    // تشغيل صوت الإشعار
    function playNotificationSound(type) {
        try {
            const audio = new Audio();
            const soundUrls = {
                success: 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvGIaBDqSzO3DcCQFL4LQpuc=',
                warning: 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvGIaBDqSzO3DcCQFL4LQpec=',
                error: 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvGIaBDqSzO3DcCQFL4LQpuc=',
                info: 'data:audio/wav;base64,UklGRnoGAABXQVZFZm10IBAAAAABAAEAQB8AAEAfAAABAAgAZGF0YQoGAACBhYqFbF1fdJivrJBhNjVgodDbq2EcBj+a2/LDciUFLIHO8tiJNwgZaLvt559NEAxQp+PwtmMcBjiR1/LMeSwFJHfH8N2QQAoUXrTp66hVFApGn+DyvGIaBDqSzO3DcCQFL4LQpuc='
            };
            
            if (soundUrls[type]) {
                audio.src = soundUrls[type];
                audio.volume = 0.3;
                audio.play().catch(() => {}); // تجاهل الأخطاء إذا لم يسمح المتصفح بالصوت
            }
        } catch (e) {
            // تجاهل أخطاء الصوت
        }
    }

    // ===========================================
    // 🔥 وظائف سريعة للأنواع المختلفة
    // ===========================================

    function showSuccessNotification(title, body, options = {}) {
        return showBeautifulNotification({
            ...options,
            title,
            body,
            type: 'success',
            icon: options.icon || '✅'
        });
    }

    function showErrorNotification(title, body, options = {}) {
        return showBeautifulNotification({
            ...options,
            title,
            body,
            type: 'error',
            icon: options.icon || '❌'
        });
    }

    function showWarningNotification(title, body, options = {}) {
        return showBeautifulNotification({
            ...options,
            title,
            body,
            type: 'warning',
            icon: options.icon || '⚠️'
        });
    }

    function showInfoNotification(title, body, options = {}) {
        return showBeautifulNotification({
            ...options,
            title,
            body,
            type: 'info',
            icon: options.icon || 'ℹ️'
        });
    }
    // ===========================================
    // 🚀 Firebase Messaging Integration
    // ===========================================

    // ربط الفانكشن مع Firebase Messaging
    function initFirebaseNotificationsmmm(title,body) {
        
            const data = {};
            // عرض الإشعار بالديزاين الجميل
            showBeautifulNotification({
                title: title || 'رسالة جديدة',
                body: body || 'لديك رسالة جديدة',
                type: 'info',
                icon:  '🔔',
                duration:  6000,
                onClick: () => {
                    // تنفيذ أكشن عند الضغط على الإشعار
                    if (data.url) {
                        window.open(data.url, '_blank');
                    } else if (data.action) {
                        eval(data.action);
                    }
                },
                actions: data.actions ? JSON.parse(data.actions) : [
                    {
                        text: 'عرض',
                        type: 'primary',
                        action: function(btn) {
                            window.location.href='../ControlPanel/Services/CommunicationForums/CommunicationForumStudent.php';
                            btn.closest('.beautiful-notificationXX').remove();
                        }
                    },
                    {
                        text: 'إغلاق',
                        type: 'secondary',
                        action: function(btn) {
                            btn.closest('.beautiful-notificationXX').remove();
                        }
                    }
                ]
            });
    }
    // ربط الفانكشن مع Firebase Messaging
    function initFirebaseNotifications() {
        if (typeof firebase === 'undefined' || !firebase.messaging) {
            console.warn('Firebase Messaging غير متاح');
            return;
        }
        
        const messaging = firebase.messaging();
        
        // استقبال الإشعارات عندما التطبيق مفتوح
        messaging.onMessage((payload) => {
            
            const notification = payload.notification || {};
            const data = payload.data || {};
            
            // عرض الإشعار بالديزاين الجميل
            showBeautifulNotification({
                title: notification.title || 'رسالة جديدة',
                body: notification.body || 'لديك رسالة جديدة',
                type: data.type || 'info',
                icon: notification.icon || '🔔',
                duration: parseInt(data.duration) || 6000,
                onClick: () => {
                    // تنفيذ أكشن عند الضغط على الإشعار
                    if (data.url) {
                        window.open(data.url, '_blank');
                    } else if (data.action) {
                        eval(data.action);
                    }
                },
                actions: data.actions ? JSON.parse(data.actions) : [
                    {
                        text: 'عرض',
                        type: 'primary',
                        action: function(btn) {
                            window.location.href='../ControlPanel/Services/CommunicationForums/CommunicationForumStudent.php';
                            btn.closest('.beautiful-notificationXX').remove();
                        }
                    },
                    {
                        text: 'إغلاق',
                        type: 'secondary',
                        action: function(btn) {
                            btn.closest('.beautiful-notificationXX').remove();
                        }
                    }
                ]
            });
            
            // اهتزاز الجهاز (إذا كان مدعوماً)
            if ('vibrate' in navigator) {
                navigator.vibrate([200, 100, 200]);
            }
        });
    }

    function SendNotificationInChatPrivate(touser, titlex, bodyx, chatKey) {
        fetch('send-notification.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                action: 'send_to_user',
                userId: touser,
                title: titlex,
                body: bodyx,
                data: {
                    type: 'private_message',
                    chatType: 'private',
                    chatKey: String(chatKey || '')
                }
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                console.log('Notification sent successfully:', data);
            } else {
                console.error('Notification failed:', data.error || 'Unknown error');
            }
        })
        .catch(error => {
            console.error('Error sending notification:', error);
        });
    }
    function SendNotificationInChatGroup(allCodes, titlex, bodyx, ClassCodex, ClassTypex) {
        if (!allCodes || !Array.isArray(allCodes) || allCodes.length === 0) {
            console.warn('No users to send notification to');
            return;
        }
        
        fetch('send-notification.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                action: 'send_to_multiple',
                userIds: allCodes,
                title: titlex,
                body: bodyx,
                ClassCode: ClassCodex,
                ClassType: ClassTypex || '',
                data: {
                    type: 'group_message',
                    chatType: 'group',
                    classCode: String(ClassCodex || ''),
                    classType: String(ClassTypex || '')
                }
            })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                console.log('Group notification sent successfully:', data);
            } else {
                console.error('Group notification failed:', data.error || 'Unknown error');
            }
        })
        .catch(error => {
            console.error('Error sending group notification:', error);
        });
    }
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initFirebaseNotifications, { once: true });
    } else {
        initFirebaseNotifications();
    }
</script>
  <link rel="stylesheet" href="../assets/css/PupUpStyle.css">
</head>

<body>
  <!-- loader starts-->
  <div class="loader-wrapper">
    <div class="loader loader-1">
      <div class="loader-outter"></div>
      <div class="loader-inner"></div>
      <div class="loader-inner-1"></div>
    </div>
  </div>
  <!-- loader ends-->
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <div id="popupLayerDelAlert" class="popup">
<div class="popup-content">

<div class="alert-box">
<div class="alert alert-dismissible justify-content-center p-0 fade show" role="alert">
<div class="alert-body text-center">
<svg>
<rect width="100%" height="100%" fill="white"/>
<image xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAAAXNSR0IArs4c6QAAB1ZJREFUeF7tm3lsFHUUx7+/ObbddlugtVZKg9hiQzmEGEChSiUxQRGPoIAQTESxKlQU0XIoRtEYCioaICKKkggiEI0KkQaVVuSoUTQUFFAqQsshtLvdezs7Mz+ZkmK32+7OzM6MDen8ufve9733mfeb480Mwf+wnSm5O8XdK7wHwFAAhIIe5ANM8fUrd3isTodYHVCJd2TBnStBaWlEbIKawqUVChBLN8sB/Pb8+GEMI/8MgI2qVMa0wuUVm6wkYDmAIwvuqAJFcSdFegaUV/QigGwVBEsBHJ0/bjIF2RyzOIIVhUsrnr3iANTNnWT32by/A+gXqzhCIflS+GuGv7ytwQoIlnXA72XjFhNClqgpigDfDSivuF2NbaI2lgA49sKEPrIoHgOQqiphClCIowYu+7ZalX0CRi0AJs2dm8EKbBlhmMGEgklAr0PXqcknhvZnvTlt//TIHDZ6shASgYk9XbiWC0X4eikXfDswsMroXCiBDEoPiby4fOuKFU7y4OznbgJhdhPAZnQwRS+XDWBG8nG0b7X3ggU4LXBwe1ywsSzKc+qjyO8Q+uCncKYZaYECAqg8hjw4u+w0IYjYO0ZFVIp+xH4cfZhAhGSAsngjMKjlN5erATKlmNfbhb7tuiAMBuX+waadEwlQrwCQCYnaQYYwGMY5cU9SfZSWj/J4K1AYAWBOthv5tkhQisGvYga2Necakk+0CKVkamkZbf8Hx/FgeS6hoDwklJCDcJBwQgAoCN7FMHhlfSuUS7K3xA+HQhBC0YCjABSPn4ChNxeBkMROEMlV65FUvaVDiFo6QBGQcgvhm/6mrh0iUODPZhkSBeTzZ/D9B6sidKIAzFq8BLxNH+1WZabpHBzvPwEiCYYAUET8U16DeN2NuiDUCRRO6dLpbdfri2IDKH3ptYTbP/XzV8H9sb/TZLV2gCJEHRnwlG7QByBM4RSVxQRUmg2AO3kQqZsWxkxUDwBFMFT8MJpHTdYMoc4qAESWkfpRKdgLf5sCACwP99ytAKdtiVoGwPbLNth3vht3D+ntAEVYGDAGwfsWxI3R1sASACTkQ9ramSCB+FOtRACAEHhL1kLu1Uc1BEsAJH+zBkkHvlKVVNsrQaerEZTKHV4JdiYmZefBNyPydBYrsOkA2MY6OD6cDUiiKgCK0ZpgAc6GOTS5lXsBBuU5pzXdhQUmvohwwWhV8UwHkLplMbi/DqhKptXIQ3lsaMpCUAbuT3eiHx95NxhXzJ4G99Oxh0utGqYC4P+sRspnquYccWvSatBcNBWhWx+K62YeAElE2ronwThPx03CDAPKsvDO2QyalBJT3jQAtuqtsFd9ZEZtqjXF/iPgf+AV6wEw/iY41j4G0uxXnWxbw5NyKn4Qrsb5oIibk90YbY9/+uwskPfRVZCz8jrNw5QOsH/9Nmw1O3UV76c8VgYLIFAWgWAAoZAfC3s3IJuNvnVWE4Bm5MJTstY6AOw/tXCsnwPQqFGCmnxxQnLg41CeMvlsGYmJkoiJmUEUpzSp8u/IKDjhWQiDOx4kG94Bjo1lYOsO607WTzksc/WDN9QMSRLBEIJFvS8gS2cHKIlQWwo8z2wBmOiZrqEAbEd2w/7lUt3Ftzr+GEzH15405coWd6V7MCLZm7BmePi9CNz+eJSOoQBSP1kA7lRNwsmaIUCTHZe6oN1mKADHullxb3fNKE6VJm+De94X5gKINetTlaSJRmLuIPinLzcXABEF2Le/Af7YXt1nATMYyGlZ8M9cDTnJYS6AVnXG1wjic5pRiyZN4nOBpmdCujrfuusATRl2AWNDD4JdoB7NKXQDsGoqrHnXWOTQ3QHdHWDhkyGLulpTmO4l0L0EYiyBY2cb9E01NDVh1zL2+4MIBi89uifdALo7wNoloKy38+cbERYiH6NxHIvs7MyEX81Rs9j+1yWgvBJ36uRZSJIUkSvDMOh3bQ4Ik9i7SXoAnAHQW42jUTbKMFl5Itx2I4RpmQ9asXk8AQhCWBnGyspBcPXFrpxlReCuEEMB73T6W3aAjecOkaMXLqRBJBsJcHdXSNDMHGSZwusNIBwWwXPsOcaOGy833dFzTdcxROx8rJJAZm6f8IzP7b5Li0Rqj/TtPR1J72jxiWUrU5ri9zfnMRK1hcFWjyzI2d1yHWBUgFg6lb+d+jToapyiJVZKRuam2wb2nabFR4+tJQCqDtevlqSQpuMMz9lWjRnU9yk9RWnxsQTAvprjJZSQ97QkRkFm3jIkb50WHz22lgDYc6h24cXvEV7XlCCh84sG91+myUeHsSUA9h766x2AztGSH6FYMfqGfNO/HrMGwOHaLaCYpAUAKDYV3ZB/ZRwE99XUVlOCmzQBAPYVDckv0uij2dz0DqisrORsV/VV3n+59OWC+i0gNJzqMXbsWPUvH6rXvmxpKICKfQf6yzLZBZD/HtARsAQkXUduoKAeULS5a6I+EHns+KLhtXr0OvIxFMD2/QcKGYn5EUCaUQm20/GyjDRy3OjhR43S/xcy5jpxbAh9gAAAAABJRU5ErkJggg==" x="0" y="0" width="100" height="80"/>
</svg>
<h4 class="mb-3" id="AlertPDelXX"></h4>
<div class="button-box">
<button class="btn btn-secondary" id="btnDelAlertXX" >موافق</button> 
<button class="btn btn-light" id="btnexistAlertXX" >إلغاء</button> 
</div>
</div>

</div>
</div>                     
</div>                              
</div>
    <script>
        // 7-10-2026
      function convertYouTubeLinkToEmbed(url) {
        if (!url) return '';
        url = url.trim();

        let urlObj;
        try {
          urlObj = new URL(url);
        } catch (e) {
          return url; // رابط غير صالح
        }

        const host = urlObj.hostname.replace(/^www\.|^m\./, '');

        // ===== Google Drive =====
        if (host === 'drive.google.com') {
          let id = null;
          const m = urlObj.pathname.match(/\/file\/d\/([^\/]+)/);
          if (m) {
            id = m[1];
          } else {
            id = urlObj.searchParams.get('id'); // open?id= أو uc?id=
          }
          if (id) return `https://drive.google.com/file/d/${id}/preview`;
          return url;
        }

        // ===== YouTube =====
        const playlistId = urlObj.searchParams.get('list');
        const withList = (base) => playlistId ? `${base}?list=${playlistId}` : base;

        // youtu.be/VIDEO_ID
        if (host === 'youtu.be') {
          const id = urlObj.pathname.slice(1);
          if (id) return withList(`https://www.youtube.com/embed/${id}`);
        }

        if (host === 'youtube.com' || host === 'youtube-nocookie.com') {
          // watch?v=VIDEO_ID
          const v = urlObj.searchParams.get('v');
          if (v) return withList(`https://www.youtube.com/embed/${v}`);

          // /shorts/ID  /embed/ID  /live/ID
          const m = urlObj.pathname.match(/^\/(?:shorts|embed|live)\/([^\/?#]+)/);
          if (m) return withList(`https://www.youtube.com/embed/${m[1]}`);

          // playlist فقط: /playlist?list=ID
          if (playlistId && urlObj.pathname === '/playlist') {
            return `https://www.youtube.com/embed/videoseries?list=${playlistId}`;
          }
        }

        // أي رابط تاني يرجع كما هو
        return url;
      }

      // ============================================================
      // 17-10-2026 مشغل فيديو الإعلان الخاص بالويب (Custom Player)
      // أزرارنا احنا (تشغيل/شريط تقدم/وقت) فوق مشغل يوتيوب من غير أزراره
      // + دعم الفيديو العمودي (Shorts 9:16) بمشغل عمودي كبير بدل ما يطلع صغير
      // ============================================================
      var cpAdYTPlayer = null;
      var cpAdYTProgressTimer = null;
      var cpAdYTApiLoading = false;

      // 17-10-2026 استخراج كود الفيديو من روابط يوتيوب (watch/shorts/live/embed/youtu.be)
      // بيرجع null للبلايليست ودرايف — دول بيشتغلوا بالـ iframe العادي
      function extractYouTubeId(url) {
        try {
          var u = new URL(url);
          var host = u.hostname.replace(/^www\.|^m\./, '');
          if (host === 'youtu.be') {
            var p = u.pathname.slice(1);
            return p ? p : null;
          }
          if (host === 'youtube.com' || host === 'youtube-nocookie.com') {
            var v = u.searchParams.get('v');
            if (v) return v;
            var mm = u.pathname.match(/^\/(?:shorts|embed|live)\/([^\/?#]+)/);
            if (mm) return mm[1];
          }
        } catch (e) {}
        return null;
      }

      // 17-10-2026 تحميل API بتاع يوتيوب مرة واحدة بس مع طابور callbacks
      function loadCpAdYTApi(cb) {
        if (window.YT && window.YT.Player) { cb(); return; }
        if (!window.cpAdYTQueue) { window.cpAdYTQueue = []; }
        window.cpAdYTQueue.push(cb);
        if (!cpAdYTApiLoading) {
          cpAdYTApiLoading = true;
          window.onYouTubeIframeAPIReady = function() {
            var q = window.cpAdYTQueue || [];
            while (q.length) { (q.shift())(); }
          };
          var sc = document.createElement('script');
          sc.src = 'https://www.youtube.com/iframe_api';
          document.head.appendChild(sc);
        }
      }

      // 17-10-2026 إيقاف المشغل وتدميره (بينادى عند قفل مودال الإعلان)
      function destroyCpAdPlayer() {
        if (cpAdYTProgressTimer) { clearInterval(cpAdYTProgressTimer); cpAdYTProgressTimer = null; }
        if (cpAdYTPlayer) {
          try { cpAdYTPlayer.destroy(); } catch (e) {}
          cpAdYTPlayer = null;
        }
      }

      // 17-10-2026 بناء المشغل داخل المودال وربط أزرار التحكم بتاعتنا
      function setupCpAdPlayer(videoId, container) {
        if (!container) return;
        var bigplay = container.querySelector('.mobad-player-bigplay');
        var playBtnIcon = container.querySelector('.mobad-player-btn .ti');
        var track = container.querySelector('.mobad-player-track');
        var fill = container.querySelector('.mobad-player-fill');
        var timeEl = container.querySelector('.mobad-player-time');
        var frameHost = container.querySelector('.mobad-player-frame');

        function setPlayIcon(playing) {
          var ic = playing ? 'ti-player-pause' : 'ti-player-play';
          if (playBtnIcon) playBtnIcon.className = 'ti ' + ic;
          if (bigplay) bigplay.style.display = playing ? 'none' : 'flex';
        }
        function fmt(t) {
          t = Math.max(0, Math.floor(t || 0));
          var mn = Math.floor(t / 60);
          var sc = t % 60;
          return mn + ':' + (sc < 10 ? '0' : '') + sc;
        }
        function updateProgress() {
          if (!cpAdYTPlayer || !cpAdYTPlayer.getDuration) return;
          var d = cpAdYTPlayer.getDuration() || 0;
          var c = cpAdYTPlayer.getCurrentTime() || 0;
          if (fill && d > 0) { fill.style.width = Math.min(100, (c / d) * 100) + '%'; }
          if (timeEl) { timeEl.textContent = fmt(c) + ' / ' + fmt(d); }
        }
        function togglePlay() {
          if (!cpAdYTPlayer || !cpAdYTPlayer.getPlayerState) return;
          if (cpAdYTPlayer.getPlayerState() === YT.PlayerState.PLAYING) {
            cpAdYTPlayer.pauseVideo();
          } else {
            cpAdYTPlayer.playVideo();
          }
        }

        // 17-10-2026 لو API يوتيوب ما اتحملتش خلال 8 ثواني نرجع للمشغل العادي
        var fallbackTimer = setTimeout(function() {
          if (!cpAdYTPlayer && frameHost) {
            frameHost.innerHTML = '<iframe src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width:100%;height:100%;border:0"></iframe>';
            var ctl = container.querySelector('.mobad-player-controls');
            if (ctl) { ctl.style.display = 'none'; }
            var bp = container.querySelector('.mobad-player-bigplay');
            if (bp) { bp.style.display = 'none'; }
          }
        }, 8000);

        loadCpAdYTApi(function() {
          try {
            cpAdYTPlayer = new YT.Player('cpAdYTTarget', {
              videoId: videoId,
              playerVars: { controls: 0, modestbranding: 1, rel: 0, playsinline: 1, disablekb: 1, fs: 0, iv_load_policy: 3 },
              events: {
                onReady: function(e) {
                  if (fallbackTimer) { clearTimeout(fallbackTimer); fallbackTimer = null; }
                  try { e.target.setPlaybackQuality('hd720'); } catch (err) {}
                  if (cpAdYTProgressTimer) { clearInterval(cpAdYTProgressTimer); }
                  cpAdYTProgressTimer = setInterval(updateProgress, 500);
                  updateProgress();
                },
                onStateChange: function(e) {
                  setPlayIcon(e.data === YT.PlayerState.PLAYING);
                  updateProgress();
                }
              }
            });
          } catch (err) {}
        });

        // 17-10-2026 ربط أزرارنا: التشغيل الكبير + زر الشريط + الضغط على الفيديو نفسه + تقديم بالضغط على الشريط
        if (bigplay) {
          bigplay.addEventListener('click', function() {
            if (cpAdYTPlayer && cpAdYTPlayer.playVideo) { cpAdYTPlayer.playVideo(); }
          });
        }
        var playBtn = container.querySelector('.mobad-player-btn');
        if (playBtn) {
          playBtn.addEventListener('click', togglePlay);
        }
        if (frameHost) {
          frameHost.addEventListener('click', togglePlay);
        }
        if (track) {
          track.addEventListener('click', function(ev) {
            if (!cpAdYTPlayer || !cpAdYTPlayer.getDuration) return;
            var r = track.getBoundingClientRect();
            var ratio = Math.min(1, Math.max(0, (ev.clientX - r.left) / r.width));
            var d = cpAdYTPlayer.getDuration() || 0;
            if (d > 0) { cpAdYTPlayer.seekTo(ratio * d, true); }
          });
        }
      }


      function CheckChangePassword() {

        let referrer = document.referrer;
        if (referrer == 'https://banan.lcet.edu.sa/ControlPanel/CheckUsers.php') {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              if (this.responseText.trim() != '') {
                document.getElementById('AlertPDelXX').innerHTML = 'سيتم إيقاف حسابك بالمنصة في حال لم يتم تغيير كلمة المرور وتحديث بريدك الإلكتروني ، يرجى التحديث الآن';
                document.getElementById('AlertPDelXX').style.color = 'green';
                document.getElementById('popupLayerDelAlert').style.display = 'block';
                var button = document.getElementById('btnDelAlertXX');
                button.addEventListener('click', function() {
                  document.location.href = "../ControlPanel/ChangePassword.php";
                  document.getElementById('popupLayerDelAlert').style.display = 'none';
                });
                var button = document.getElementById('btnexistAlertXX');
                button.addEventListener('click', function() {
                  document.getElementById('popupLayerDelAlert').style.display = 'none';
                });

              }
            }
          };
          xmlhttp.open("GET", "../ControlPanel/AjaxPages/CheckChangePasswordAjax.php", true);
          xmlhttp.send();
        }


      }

      function CheckNewAdvertise() {

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.trim() != '') {
              document.getElementById("DivOkAdvertise").innerHTML = this.responseText;
              var button = document.getElementById("ClickAdvertise");
              const popupBody = document.getElementById('myAdvertiseModelDet');
              const content = button.getAttribute('data-content');
              const url = button.getAttribute('data-url');
              const text = button.getAttribute('data-text');

              popupBody.innerHTML = '';

              if (content === 'video') {
                // 17-10-2026 مشغل الويب الخاص بنا: أزرارنا احنا فوق مشغل يوتيوب من غير أزراره
                // والفيديوهات العمودية (Shorts 9:16) بتتعرض بمشغل عمودي كبير بدل ما تطلع صغيرة وسط شريطين أسود
                var isVerticalVideo = /\/shorts\//.test(url || '');
                var ytVideoId = extractYouTubeId(url || '');
                if (ytVideoId) {
                  popupBody.innerHTML = `<div class="mobad-player${isVerticalVideo ? ' mobad-player-portrait' : ''}"><div class="mobad-player-frame"><div id="cpAdYTTarget"></div></div><button class="mobad-player-bigplay" type="button" aria-label="تشغيل"><i class="ti ti-player-play"></i></button><div class="mobad-player-controls"><button class="mobad-player-btn" type="button" aria-label="تشغيل / إيقاف"><i class="ti ti-player-play"></i></button><div class="mobad-player-track"><div class="mobad-player-fill"></div></div><span class="mobad-player-time">0:00 / 0:00</span></div></div>`;
                  setupCpAdPlayer(ytVideoId, popupBody.querySelector('.mobad-player'));
                } else {
                  // 17-10-2026 درايف/بلايليست/روابط تانية → iframe embed زي ما هو
                  popupBody.innerHTML = `<iframe width="100%" height="315" src="${convertYouTubeLinkToEmbed(url)}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                }
              } else if (content === 'image') {
                popupBody.innerHTML = `<img class="img-fluid" src="${url}" style="width:100%" alt="Popup Image">`;
              } else if (content === 'text') {
                popupBody.innerHTML = `<br><br><p>${text}</p>`;
              } else if (content === 'pdf') {
                popupBody.innerHTML = `<div class="row dropzoneN"><div class="col-md-12 col-md-offset-3 text-center"><div class="btn-container"><div class="imgupload mb-2"><img class="img-fluid" src="Services/Advertisements/img/upload.png" alt="Popup Image"></div><a href="${url}" class="btn btn-primary" target="_blank">إضغط لعرض الملف</a></div></div></div></div>`;
              }

              button.click();


            } else {
              CheckChangePassword();
            }
          }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/Advertisements/AjaxPages/GetAdvertisementDashBoard.php", true);
        xmlhttp.send();



      }
    </script>
    <style>
      /* ============================================================
         17-10-2026 مشغل فيديو الإعلان على الويب (Custom Player)
         نفس تصميم أزرار التطبيق: تشغيل/شريط تقدم/وقت فوق مشغل يوتيوب من غير أزراره
         ============================================================ */
      .mobad-player {
        position: relative;
        width: 100%;
        padding-top: 56.25%;
        background: #000;
        overflow: hidden;
        border-radius: 10px;
      }
      .mobad-player .mobad-player-frame {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
      .mobad-player .mobad-player-frame iframe {
        width: 100% !important;
        height: 100% !important;
        border: 0;
        display: block;
      }
      /* 17-10-2026 المشغل العمودي للـ Shorts (9:16):
         الطول بيبقى بنفس طول الشاشة تقريبًا (80vh) والعرض مشتق منه بنسبة 9:16 (45vh)
         والمودال نفسه بيفضل أطول من الشاشة شوية والسكرول بره زي ما كان */
      .mobad-player.mobad-player-portrait {
        height: 80vh;
        width: min(45vh, 100%);
        margin: 0 auto;
        padding-top: 0;
      }
      /* 17-10-2026 عرض مودال الإعلان متظبط وثابت (من غير ما نلمس باقي المودالات) */
      #myAdvertiseModel .modal-dialog { max-width: 520px; }
      /* 17-10-2026 شريط التحكم بتاعنا */
      .mobad-player-controls {
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 18px 14px 12px;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
        direction: ltr;
      }
      .mobad-player-btn {
        flex-shrink: 0;
        width: 40px;
        height: 40px;
        border: 0;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.18);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        padding: 0;
        transition: background 0.2s;
      }
      .mobad-player-btn:hover { background: rgba(255, 255, 255, 0.32); }
      .mobad-player-btn .ti { font-size: 24px; }
      .mobad-player-track {
        position: relative;
        flex: 1;
        height: 6px;
        border-radius: 99px;
        background: rgba(255, 255, 255, 0.3);
        cursor: pointer;
      }
      .mobad-player-fill {
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 0%;
        border-radius: 99px;
        background: #fff;
      }
      .mobad-player-fill::after {
        content: "";
        position: absolute;
        right: -7px;
        top: 50%;
        transform: translateY(-50%);
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #fff;
      }
      .mobad-player-time {
        flex-shrink: 0;
        color: #fff;
        font-size: 12px;
        font-weight: 600;
        direction: ltr;
        white-space: nowrap;
      }
      /* 17-10-2026 زر التشغيل الكبير في نص الفيديو */
      .mobad-player-bigplay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        width: 72px;
        height: 72px;
        border: 0;
        border-radius: 50%;
        background: rgba(22, 90, 162, 0.88);
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.35);
        padding: 0;
      }
      .mobad-player-bigplay .ti { font-size: 38px; }

      /* 17-10-2026 زر إغلاق مودال الإعلان بالأحمر (زي التطبيق): دايرة حمراء + علامة X بيضا + ظل
         — بنستبدل الـ SVG الأسود بتاع Bootstrap بواحد أبيض لأن الرسمة نفسها جاية كـ background-image
         — 17-10-2026 إصلاح اختفاء الزر: قواعد قاطعة !important عشان ستايلات PupUpStyle.css القديمة ما تغطيش عليه
         — 17-10-2026 رجّعنا الزر يركب على حرف المودال (-8px) زي الشكل الأصلي —
           8px بالظبط لأنها أقصى طلعة آمنة قبل حاوية المودال اللي بتقص أي زيادة */
      #myAdvertiseModel .btn-close.btnmodel1 {
        position: absolute !important;
        top: -8px !important;
        inset-inline-end: -8px !important;
        z-index: 50;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 38px !important;
        height: 38px !important;
        padding: 0 !important;
        border-radius: 50% !important;
        opacity: 1 !important;
        background-color: #e5383b !important;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23ffffff'%3e%3cpath d='M.293.293a1 1 0 0 1 1.414 0L8 6.586 14.293.293a1 1 0 1 1 1.414 1.414L9.414 8l6.293 6.293a1 1 0 0 1-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 0 1-1.414-1.414L6.586 8 .293 1.707a1 1 0 0 1 0-1.414z'/%3e%3c/svg%3e") !important;
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: 55% !important;
        box-shadow: 0 4px 12px rgba(229, 56, 59, 0.45) !important;
        transition: background-color 0.2s;
      }
      #myAdvertiseModel .btn-close.btnmodel1:hover {
        opacity: 1 !important;
        background-color: #c92a2d !important;
      }
      #myAdvertiseModel .btn-close.btnmodel1:focus {
        box-shadow: 0 4px 12px rgba(229, 56, 59, 0.45) !important;
      }
    </style>
          <script name="sc1xx">
        document.addEventListener('DOMContentLoaded', function() {
          CheckNewAdvertise();
        });
      </script>
    
    <!-- Page Header Start-->
    <script name="CookiesExpire">
  function getCookieValue(cookieName) {
    const cookies = document.cookie.split(';');
    for (let cookie of cookies) {
      cookie = cookie.trim();
      if (cookie.startsWith(`${cookieName}=`)) {
        return cookie.split('=')[1];
      }
    }
    return null;
  }

  function alertBeforeCookieExpires(cookieName, minutesBefore) {
    var timeLeft = 300;
    const expiryValue = getCookieValue(cookieName);

    if (!expiryValue) {
      return;
    }

    // Convert expiry to a Date object
    const expiryDate = new Date(parseInt(expiryValue) * 1000);
    // Calculate time to alert (5 minutes before expiry)
    const alertTime = new Date(expiryDate.getTime() - minutesBefore * 60000);

    const timeUntilAlert = alertTime.getTime() - Date.now();

    if (timeUntilAlert > 0) {
      setTimeout(() => {
        (function($) {
          "use strict";
          var notify = $.notify(
            '<div  style="cursor: pointer;" onclick="renewCookiesOneDay();"><i class="fa fa-bell-o"></i><strong>برجاء الإنتباه</strong> باقي <span id="countdown" style="color:red">05:00</span> على إنتهاء الجلسة إضغط للتحديث <br></div>', {
              type: "theme",
              allow_dismiss: true,
              delay: 2000,
              showProgressbar: true,
              timer: 300000,
              animate: {
                enter: "animated fadeInDown",
                exit: "animated fadeOutUp",
              },
            }
          );

          // setTimeout(function () {
          // notify.update(
          // "message",
          //  '<i class="fa fa-bell-o"></i><strong>Loading</strong> Inner Data.'
          // );
          // }, 1000);
        })(jQuery);

        let timerInterval = setInterval(updateCountdown, 1000)
        // alert(`${cookieName} is about to expire in ${minutesBefore} minutes!`);
      }, timeUntilAlert);
    } else {
      console.log("The cookie has already expired or it's less than the alert time.");
      setTimeout(() => {
        window.location.href = "../ControlPanel/login.php";
      }, 1000);
    }
    // Example usage: Alert 5 minutes before the "user_expiry" cookie expires



    // Function to update the countdown timer
    function updateCountdown() {
      // Calculate minutes and seconds
      if (document.getElementById('countdown')) {
        let minutes = Math.floor(timeLeft / 60);
        let seconds = timeLeft % 60;

        // Add a leading zero if necessary
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        // Display the time in MM:SS format
        document.getElementById('countdown').textContent = `${minutes}:${seconds}`;

        // Decrement the time left
        timeLeft--;

        // Stop the countdown at 0
        if (timeLeft < 0) {
          document.getElementById('countdown').textContent = "00:00";
          window.location.href = "../ControlPanel/login.php";
          clearInterval(timerInterval);
        }

      }
    }
  }

  function renewCookiesOneDay() {
    const cookies = document.cookie.split('; ');
    cookies.forEach(cookie => {
      const [name, value] = cookie.split('=');
      // Set the expiration date to one day from now
      const expires = new Date();
      expires.setDate(expires.getDate() + 1);
      document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/`;
      window.location.reload();
    });
  }
  setTimeout(alertBeforeCookieExpires('Banan_user_expiry', 6), 2000);
</script>
<script type="text/javascript">
  // window.onload = function() {
  // document.documentElement.dir = 'rtl';
  // or
  // document.documentElement.style.direction = 'rtl';
  //}
</script>
<script>
  function ShowPrepareCHead(str1) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText == '') {
          window.location.href = "../ControlPanel/index.php";
        }
      }
    };
    xmlhttp.open("GET", "../ControlPanel/AjaxPages/PrepareCookies.php?JobCode=" + str1, true);
    xmlhttp.send();
  }
</script>

<script>
  //    document.addEventListener('contextmenu', function(e) {
  //        e.preventDefault();
  //    }, false);
</script>
</head>
<script>
  function ShowParentStudents(str1, str2) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText != '') {
          document.getElementById("ShowParentStudents").innerHTML = this.responseText;
          FillClassCookies();
          if (document.getElementsByName('sc1xx')) {
            var fields = document.getElementsByName('sc1xx');
            for (var i = 0; i < fields.length; i++) {
              // Create a new script element
              var script = document.createElement('script');
              script.textContent = fields[i].innerHTML;
              // Append the script to the document to execute it
              document.body.appendChild(script);
              // Call the specific function after the script is executed
              if (typeof callajax === 'function') {
                callajax();
              } else {
                console.log('callajax is not defined');
              }
            }

          }

          if (str2 == 0) {
            window.location.reload();
          }
        }
      }
    };
    xmlhttp.open("GET", "../ControlPanel/AjaxPages/NewPrepareParentStudentsCookies.php?StudentCode=" + str1, true);
    xmlhttp.send();
  }

  function FillClassCookies() {
          if (document.getElementById("classnameSt").innerHTML.trim() == "" || document.getElementById("classnameSt").innerHTML.trim() == "(/)") {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            if (this.responseText != '') {
              document.getElementById("classnameSt").innerHTML = this.responseText.trim();
              // window.location.reload();
            }
          }
        };
        xmlhttp.open("GET", "../ControlPanel/AjaxPages/PrepareClassCookies.php", true);
        xmlhttp.send();

      }
      }
    </script>
<script>
  function changelang() {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText != '') {
          console.log("lang=" + this.responseText);
          window.location.reload();
        }
      }
    };
    xmlhttp.open("GET", "../ControlPanel/AjaxPages/ChangeLang.php", true);
    xmlhttp.send();
  }
</script>

  <div class="page-header row">

    <div class="header-wrapper col m-0">
      <div class="row headtem">
        <form class="form-inline search-full col" action="#" method="get">
          <div class="form-group w-100">
            <div class="Typeahead Typeahead--twitterUsers">
              <div class="u-posRelative">
                <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Mofi .." name="q" title="" autofocus>
                <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
              </div>
              <div class="Typeahead-menu"></div>
            </div>
          </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="../ControlPanel/index.php"><img class="img-fluid" src="../assets/images/logo/logo.png" alt=""></a></div>
          <div class="toggle-sidebar">
            <svg class="stroke-icon sidebar-toggle status_toggle middle">
              <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
            </svg>
          </div>
        </div>
        <div class="left-header col-xxl-6 col-xl-5 col-md-5 col-6 p-0">
          <div> <a class="toggle-sidebar" href="#"> <i class="iconly-Category icli"> </i></a>
            <div class="d-flex align-items-center gap-2 mt-3" style="margin-right: 10px;">
              <h4 class="f-w-600">مـرحـباً عبدالرحمن عبيد تركي السبيعي  ✋                   <span id="classnameSt">
                   ( الثالث المتوسط/6 موهبة )                </span>
                              </h4>
            </div>
          </div>
        </div>
        <div class="nav-right col-xxl-6 col-xl-6 col-md-6 col-6 pull-right right-header p-0 ">
          <ul class="nav-menus">
            <li>
              <span class="f-18 txt-primary">
                <a href="https://banan-bls.com/ControlPanel/index.php"><i data-feather="home" class="f-18"></i></a>

              </span>
            </li>
            <li>
              <div class="col-12 text-center" style="width: 200px;">
                <span class="f-18 txt-primary"><i class="fa fa-calendar"></i></span>
                <span class="f-14 txt-primary">2026-11-10</span>
                <span class="f-18 txt-primary"><i class="fa fa-clock-o"></i></span>
                <span class="f-14 txt-primary" id="displayTime1"></span>
              </div>
            </li>
                        <script>
         //عرض وقت السيرفر بدلا من وقت الجهاز
         let serverTime = new Date("2026-11-10 09:18:19"); 
function showTime() {
  serverTime.setSeconds(serverTime.getSeconds() + 1);
  let displayTime = document.getElementById("displayTime1");
  displayTime.innerText = serverTime.toLocaleTimeString("en-US", { hour12: false });
  setTimeout(showTime, 1000);
}
showTime();
              
              function ClearSessions() {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                  if (this.readyState == 4 && this.status == 200) {}
                };
                xmlhttp.open("GET", "../ControlPanel/AjaxPages/ClearSessionsAjax.php", true);
                xmlhttp.send();
              }

              function RefrechSession() {
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "../ControlPanel/AjaxPages/RefrechSessionAjax.php", true);
                xhr.onreadystatechange = function() {
                  if (xhr.readyState == 4 && xhr.status == 200) {
                    console.log(xhr.responseText);
                  }
                };
                xhr.send();
              }
              setInterval(RefrechSession, 1800000);
            </script>


                                      <li class="onhover-dropdown" onmouseover="ShowDetailsAlert();">
                <div class="notification-box">
                  <svg>
                    <use href="../assets/svg/icon-sprite.svg#notification"></use>
                  </svg><span class="badge rounded-pill badge-primary" id="BrfCount2"></span>
                </div>
                <div class="onhover-show-div notification-dropdown">
                  <h5 class="f-18 f-w-600 mb-0 dropdown-title">الإشعارات </h5>
                  <ul class="notification-box" id="BrfNTF">
                  </ul>
                </div>
              </li>
                        <li>
              <div class="mode">
                <svg>
                  <use href="../assets/svg/icon-sprite.svg#moon"></use>
                </svg>
              </div>
            </li>
    

            <li class="changelang bg-primary" style="cursor: pointer;" onclick="changelang();">
                        <i class="fa fa-language f-20"></i>
                    </li>
            
            <li class="profile-nav onhover-dropdown px-0 py-0">
                            <div id="customizer-links"><!-- تغيير شكل القائمة الجانبية -->
                <!-- تم اضافة تعديلات فى القائمة  -->
                <div class="nav flex-column nac-pills" id="c-pills-tab" role="tablist" aria-orientation="vertical">
                  <a class="nav-link" id="c-pills-home-tab" data-bs-toggle="pill" href="#c-pills-home" role="tab" aria-controls="c-pills-home" aria-selected="true" data-original-title="">
                    <div class="d-flex profile-media align-items-center">
                      <!-- تم تعديل حجم الصورة  -->
                      <img class="img-30  rounded-5" style="height: 30px;" src="../assets/images/dashboard/profile.png" onerror="this.src='../assets/images/dashboard/profile.png'" alt="">
                      <div class="flex-grow-1"><span>عبدالرحمن <i class="fa fa-angle-down"></i></span>

                      </div>
                    </div>
                  </a>
                </div>
              </div>
                            <div class="customizer-contain" id="customizer-contain" style="direction: rtl;">
                <style>
                  .taabs-container {
                    width: 100%;
                    display: flex;
                    flex-direction: column;
                    align-items: stretch;
                  }

                  .taabs-header {
                    display: flex;
                    border-bottom: 2px solid #e0e0e0;
                    background: #fff;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                  }

                  .taab-button {
                    flex: 1;
                    padding: 5px;
                    text-align: center;
                    cursor: pointer;
                    font-weight: bold;
                    color: #555;
                    border: none;
                    background: none;
                    transition: 0.3s ease;
                  }

                  .taab-button.active {
                    background: var(--theme-default);
                    color: #fff;
                  }

                  .taab-content {
                    display: none;
                  }

                  .taab-content.active {
                    display: block;
                  }

                  .parent-siddebar {
                    width: 100%;
                    background: linear-gradient(to bottom right, #ffffff, #f2f6ff);
                    padding: 25px 20px;
                  }

                  .siddebar-header h2 {
                    font-size: 1.6rem;
                    margin-bottom: 20px;
                    color: var(--theme-default);
                    text-align: center;
                    position: relative;
                  }

                  .siddebar-header h2::after {
                    content: "";
                    width: 50px;
                    height: 3px;
                    background: var(--theme-default);
                    position: absolute;
                    bottom: -8px;
                    right: calc(50% - 25px);
                    border-radius: 5px;
                  }

                  .children-list {
                    list-style: none;
                    padding: 0;
                    margin: 0;
                    flex-grow: 1;
                    max-height: 60vh;
                    overflow-y: auto;
                  }

                  .child-card {
                    display: flex;
                    align-items: center;
                    background: #fff;
                    padding: 12px;
                    margin-bottom: 12px;
                    border-radius: 14px;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
                    cursor: pointer;
                    transition: all 0.3s ease;
                    border: 2px solid transparent;
                  }

                  .child-card.selected {
                    border-color: var(--theme-default);
                    background: linear-gradient(to left, #e0ebff, #f7f9ff);
                    box-shadow: 0 4px 12px rgba(74, 110, 255, 0.2);
                  }

                  .child-avatar {
                    width: 50px;
                    height: 50px;
                    border-radius: 50%;
                    object-fit: cover;
                    margin-right: 4px;
                    border: 2px solid var(--theme-default);
                  }

                  .child-info {
                    flex: 1;
                    text-align: start;
                    margin-right: 4px;
                  }

                  .child-info h4 {
                    margin: 0;
                    font-size: 1rem;
                    color: #333;
                  }

                  .child-info p {
                    margin: 4px 0 0;
                    font-size: 0.85rem;
                    color: #777;
                  }

                  .siddebar-actions {
                    margin-top: 20px;
                    display: flex;
                    flex-direction: column;
                    gap: 12px;
                  }



                  .btn:hover {
                    filter: brightness(1.1);
                  }




                  .taab-info-content {
                    padding: 10px 10px;
                    background: #fff;
                    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
                    font-size: 1rem;
                    color: #444;
                    line-height: 1.8;
                  }

                  .taab-button i {
                    font-size: 1.4rem;
                  }



                  .page-wrapper .page-header .header-wrapper .nav-right>ul>li .badge {
                    position: "relative";
                  }

                  .layout-grid:not(.customizer-color) li>.body ul .sidebar {
                    margin: 0px;
                  }
                </style>
                <div class="" id="c-pills-tabContent">
                  <div class="card">
                    <div class="card-header">
                      <div class="row">
                        <div class="col-9 text-start mt-2">
                          <h4>إعدادات الحساب</h4>
                        </div>
                        <div class="col-3 text-end"><button class="btn btn-danger" id="btnclose" type="button">X</button></div>
                      </div>
                    </div>
                    <div class="">
                      <div class="taabs-container">
                        <div class="taabs-header">
                          <button class="taab-button active" data-taab="students-taab" title="إعدادات">
                            <i class="fa fa-cogs"></i>
                          </button>
                          <button class="taab-button" data-taab="info-taab" title="">
                            <i class="icofont icofont-paint f-26"></i>
                          </button>
                        </div>

                        <!-- تبويب أبنائي -->
                        <div class="taab-content active" id="students-taab">
                          <div class="parent-siddebar">
                            <div>
                              <ul class="children-list" id="ShowParentStudents">

                              </ul>
                              <ul class="children-list">
                               
                                                              </ul>
                            </div>

                            <div class="siddebar-actions">
                              <button class="btn btn-primary f-16" type="button" onclick='location.href="https://banan-bls.com/ControlPanel/ChangePassword.php"'>
                                <i class="fa fa-cog"></i> تعديل الملف الشخصي                              </button>
                              <button class="btn btn-info f-16" type="button" onclick='location.href="https://banan-bls.com/ControlPanel/NotificationSetting.php"'>
                                <i class="fa fa-bell"></i> إعدادات الإشعارات                              </button>
                              <button class="btn btn-danger f-16" type="button" onclick="ClearSessionsF.submit();">
                                <i class="fa fa fa-sign-out"></i>  تسجيل خروج                              </button>
                            </div>
                          </div>
                        </div>

                        <!-- تبويب معلومات -->
                        <div class="taab-content" id="info-taab">
                          <div class="taab-info-content">
                            <div class="customizer-body custom-scrollbar">
                              <div class="tab-pane fade show active" id="c-pills-home" role="tabpanel" aria-labelledby="c-pills-home-tab">
                               
                                <h5>Unlimited Color</h5>
                                <ul class="layout-grid unlimited-color-layout">
                                <input id="ColorPicker1" type="color" value="" name="Background">
                                <input id="ColorPicker2" type="color" value="#48A3D7" name="Background">
                                <button type="button" class="color-apply-btn btn btn-primary color-apply-btn">Apply</button></ul>
                                <script>
  // نقرأ القيمة من :root
  const rootStyles = getComputedStyle(document.documentElement);
  const primaryColor = rootStyles.getPropertyValue('--theme-default').trim();
  const primaryColor2 = rootStyles.getPropertyValue('--theme-secondary').trim();

  // نعينها كقيمة للـ input
  document.getElementById("ColorPicker1").value = primaryColor;
  document.getElementById("ColorPicker2").value = primaryColor2;

</script>
                                <h5>Light layout</h5>
                                <ul class="layout-grid customizer-color">
                                  <li class="color-layout" data-attr="color-1" data-primary="#57002a" data-secondary="#48A3D7">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-2" data-primary="#88967e" data-secondary="#29353a">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-3" data-primary="#c6164f" data-secondary="#372363">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-4" data-primary="#4b232d" data-secondary="#8e6343">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-5" data-primary="#007a91" data-secondary="#534686">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-6" data-primary="#56409f" data-secondary="#21637f">
                                    <div></div>
                                  </li>
                                </ul>
                                <h5>Dark Layout</h5>
                                <ul class="layout-grid customizer-color dark">
                                  <li class="color-layout" data-attr="color-1" data-primary="#57002a" data-secondary="#48A3D7">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-2" data-primary="#88967e" data-secondary="#29353a">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-3" data-primary="#c6164f" data-secondary="#372363">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-4" data-primary="#4b232d" data-secondary="#8e6343">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-5" data-primary="#007a91" data-secondary="#534686">
                                    <div></div>
                                  </li>
                                  <li class="color-layout" data-attr="color-6" data-primary="#56409f" data-secondary="#21637f">
                                    <div></div>
                                  </li>
                                </ul>
                              </div>
                              <div class="tab-pane fade" id="c-pills-layouts" role="tabpanel" aria-labelledby="c-pills-layouts-tab"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </div>
  </div>
  <form id="ClearSessionsF" name="ClearSessionsF" target="C_Selfcccc" style="display:none;" action="../ControlPanel/AjaxPages/ClearSessionsAjax.php"></form>
  <iframe name="C_Selfcccc" style="display:none;" id="C_Selfcccc" width="0" height="0"></iframe>
<script>
  document.querySelectorAll("#customizer-links #c-pills-home-tab, #customizer-links #c-pills-layouts-tab")
    .forEach(function(el) {
      el.addEventListener("click", function() {
        document.querySelector("#customizer-contain").classList.add("open");
        document.querySelector("#customizer-links").classList.add("open");
      });
    });

  document.querySelector(".close-customizer-btn")?.addEventListener("click", function() {
    const floatedPanel = document.querySelector(".floated-customizer-panel");
    if (floatedPanel) floatedPanel.classList.remove("active");
  });

  document.querySelector("#customizer-contain #btnclose")?.addEventListener("click", function() {
    document.querySelector("#customizer-contain")?.classList.remove("open");
    document.querySelector("#customizer-links")?.classList.remove("open");
  });
  const taabs = document.querySelectorAll('.taab-button');
  const contents = document.querySelectorAll('.taab-content');

  taabs.forEach(btn => {
    btn.addEventListener('click', () => {
      taabs.forEach(t => t.classList.remove('active'));
      contents.forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      document.getElementById(btn.dataset.taab).classList.add('active');
    });
  });
</script>
    <!-- Page Header Ends   -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">

      <!-- Page Sidebar Start-->
          <div class="sidebar-wrapper" id="sidebar-wrapper" data-layout="stroke-svg">
        <div>
        <div class="logo-wrapper"><a href="../ControlPanel/index.php"><img class="img-fluid imgschool" src="../assets/images/logo/logo1.png?dummy=2" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar">
            <svg class="stroke-icon sidebar-toggle status_toggle middle">
                <use href="../assets/svg/icon-sprite.svg#toggle-icon"></use>
            </svg>
            <svg class="fill-icon sidebar-toggle status_toggle middle">
                <use href="../assets/svg/icon-sprite.svg#fill-toggle-icon"></use>
            </svg>
            </div>
        </div>
        <div class="logo-icon-wrapper"><a href="../ControlPanel/index.php"><img class="img-fluid" src="../assets/images/logo/logo-icon1.png?dummy=1" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
            
                    <ul class="sidebar-links" id="simple-bar">
                                    <li class="back-btn">
                                        <a href="index.php">
                                            <img class="img-fluid" src="https://banan-bls.com/assets/images/logo/logo-icon.png" alt="">
                                        </a>
                                        <div class="mobile-back text-end">
                                            <span>رجوع </span>
                                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                                        </div>
                                    </li>
                                    <li class="sidebar-search-box">
                                        <div class="search-wrapper">
                                            <input type="text" id="sidebar-search" class="form-control" placeholder="بحث في الخدمات..." autocomplete="off">
                                            <i class="fa fa-search search-icon"></i>
                                            <i class="fa fa-times clear-search" id="clear-search" style="display: none;"></i>
                                        </div>
                                    </li>
                                    <li class="sidebar-main-title">
                                        <div>
                                            <h6>الخدمات</h6>
                                        </div>
                                    </li><li class="sidebar-list" data-service="الرئيسية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/index.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-home"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-home"></use>
                                                </svg>
                                                <span>الرئيسية</span>
                                            </a></li><li class="sidebar-list" data-service="حسابك على Teams">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/Services/MicrosoftTeams/StudentAccountInfo.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-email"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-email"></use>
                                                </svg>
                                                <span>حسابك على Teams</span>
                                            </a></li><li class="sidebar-list" data-service="عمليات يومية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2003">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-widget"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-widget"></use>
                                                </svg>
                                                <span>عمليات يومية</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="جدول الحصص">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/TimeTable/StudentTimeTable.php" 
                                                        title="جدول الحصص">
                                                            جدول الحصص
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="الخطة الأسبوعية">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/Plans/StudentWeeklyPlan.php" 
                                                        title="الخطة الأسبوعية">
                                                            الخطة الأسبوعية
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="تقرير اداء الطالب">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/SessionManagement/StudentPerformanceReport.php" 
                                                        title="تقرير اداء الطالب">
                                                            تقرير اداء الطالب
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="سجل الغياب والتأخر">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/StudentsOperation/StudentOperationsLogRep.php" 
                                                        title="سجل الغياب والتأخر">
                                                            سجل الغياب والتأخر
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="سجل المخالفات ">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/StudentsOperation/StudentBehavioralViolationLogRep.php" 
                                                        title="سجل المخالفات ">
                                                            سجل المخالفات 
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الفصول الإفتراضية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/Services/VirtualClasses/VirtualClassesStudents.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-animation"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-animation"></use>
                                                </svg>
                                                <span>الفصول الإفتراضية</span>
                                            </a></li><li class="sidebar-list" data-service="الدورات التدريبية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/Services/TrainingCourses/CoursesShow.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-bookmark"></use>
                                                </svg>
                                                <span>الدورات التدريبية</span>
                                            </a></li><li class="sidebar-list" data-service="المكتبة الرقمية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/Services/Library/TeacherLibraryStudents.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-gallery"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-gallery"></use>
                                                </svg>
                                                <span>المكتبة الرقمية</span>
                                            </a></li><li class="sidebar-list" data-service="درجات الرصد الأسبوعي">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="https://banan-bls.com/ControlPanel/Services/WeeklyRasdExams/WeeklyRasdExamsStudent.php">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-file"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-file"></use>
                                                </svg>
                                                <span>درجات الرصد الأسبوعي</span>
                                            </a></li><li class="sidebar-list" data-service="مجموعات التواصل">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2008">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-chat"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-chat"></use>
                                                </svg>
                                                <span>مجموعات التواصل</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="مجموعات التواصل للطالب">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/CommunicationForums/CommunicationForumStudent.php" 
                                                        title="مجموعات التواصل للطالب">
                                                            مجموعات التواصل للطالب
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="اختبر نفسك">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2009">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-project"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-project"></use>
                                                </svg>
                                                <span>اختبر نفسك</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="اختبر نفسك">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/SelfExams/SelfExams.php" 
                                                        title="اختبر نفسك">
                                                            اختبر نفسك
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="الإختبارات الذاتية المُضافة">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/SelfExams/StSelfEExamsArchive.php" 
                                                        title="الإختبارات الذاتية المُضافة">
                                                            الإختبارات الذاتية المُضافة
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الواجبات والإختبارات الإلكترونية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2010">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-task"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-task"></use>
                                                </svg>
                                                <span>الواجبات والإختبارات الإلكترونية</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="الواجبات الإلكترونية">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/EHomeworks/Ehomindex.php" 
                                                        title="الواجبات الإلكترونية">
                                                            الواجبات الإلكترونية
                                                        </a>
                                                    </li><li class="sub-sub-item" data-subservice="الإختبارات الإلكترونية">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/EHomeworks/Ehomindex.php" 
                                                        title="الإختبارات الإلكترونية">
                                                            الإختبارات الإلكترونية
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الواجبات اليومية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2011">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-board"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-board"></use>
                                                </svg>
                                                <span>الواجبات اليومية</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="جدول الواجبات اليومية">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/HomeWorksTable/StudentHomeWorkTable.php" 
                                                        title="جدول الواجبات اليومية">
                                                            جدول الواجبات اليومية
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الإستبيانات">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2012">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-to-do"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-to-do"></use>
                                                </svg>
                                                <span>الإستبيانات</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="قوائم الإستبيانات">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/Surveys/SurveysShow.php" 
                                                        title="قوائم الإستبيانات">
                                                            قوائم الإستبيانات
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الروابط الهامة">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2013">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-knowledgebase"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-knowledgebase"></use>
                                                </svg>
                                                <span>الروابط الهامة</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="قوائم الروابط الهامة">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/ImportantLinks/ImportantLinkShow.php" 
                                                        title="قوائم الروابط الهامة">
                                                            قوائم الروابط الهامة
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="الخطط العلاجية">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2014">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-bookmark"></use>
                                                </svg>
                                                <span>الخطط العلاجية</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="الخطط العلاجية المُضافة للطلاب">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/AnalysisDegrees/StudentShowSkillPlans.php" 
                                                        title="الخطط العلاجية المُضافة للطلاب">
                                                            الخطط العلاجية المُضافة للطلاب
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="شهادات الطلاب">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2015">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-user"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-user"></use>
                                                </svg>
                                                <span>شهادات الطلاب</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="بيان درجات الاختبارات الفترية">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/AnalysisDegrees/ShowStudentCert.php" 
                                                        title="بيان درجات الاختبارات الفترية">
                                                            بيان درجات الاختبارات الفترية
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="جداول الاختبارات">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2016">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-file"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-file"></use>
                                                </svg>
                                                <span>جداول الاختبارات</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="عرض جدول اختبارات الطالب">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/ExamTable/ShowStExamTable.php" 
                                                        title="عرض جدول اختبارات الطالب">
                                                            عرض جدول اختبارات الطالب
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="ملف انجاز الطالب">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2017">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-bookmark"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-bookmark"></use>
                                                </svg>
                                                <span>ملف انجاز الطالب</span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="اضافة ملف الانجاز">
                                                        <a href="https://banan-bls.com/ControlPanel/StudentsData/AchievementFile/StudentAchievementFileData.php" 
                                                        title="اضافة ملف الانجاز">
                                                            اضافة ملف الانجاز
                                                        </a>
                                                    </li></ul></li><li class="sidebar-list" data-service="استمارات تحويل الطلاب ">
                                        <i class="fa fa-thumb-tack"></i>
                                        <a class="sidebar-link sidebar-title"   href="#Srv2018">
                                                <svg class="stroke-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#stroke-file"></use>
                                                </svg>
                                                <svg class="fill-icon">
                                                    <use href="https://banan-bls.com/assets/svg/icon-sprite.svg#fill-file"></use>
                                                </svg>
                                                <span>استمارات تحويل الطلاب </span>
                                            </a><ul  class="sidebar-submenu"><li class="sub-sub-item" data-subservice="عرض استمارات التحويل الخاصة بالطلاب">
                                                        <a href="https://banan-bls.com/ControlPanel/Services/StudentForms/ShowStudentForm.php" 
                                                        title="عرض استمارات التحويل الخاصة بالطلاب">
                                                            عرض استمارات التحويل الخاصة بالطلاب
                                                        </a>
                                                    </li></ul></li></ul>            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
        </div>
        <img id="ban1" class="banalogo" src="../assets/images/logo/bananlogo.png?dummy=2">
        <img  id="ban2"class="img-fluid" src="../assets/images/logo/logo-icon.png?dummy=1" alt=""> 
    
    </div>

    <!-- CSS للبحث -->
    <style>
        .sidebar-search-box {
            padding: 10px 15px;
            border-bottom: 1px solid #e8e8e8;
            margin-bottom: 10px;
        }

        .search-wrapper {
            position: relative;
            width: 100%;
        }

        .search-wrapper input {
            width: 100%;
            padding: 8px 35px 8px 12px;
            border: 1px solid #ddd;
            border-radius: 20px;
            font-size: 13px;
            background-color: #f8f9fa;
            transition: all 0.3s ease;
        }

        .search-wrapper input:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            background-color: white;
        }

        .search-icon {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            font-size: 12px;
        }

        .clear-search {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            cursor: pointer;
            font-size: 12px;
        }

        .clear-search:hover {
            color: #dc3545;
        }

        /* تسليط الضوء على النص المطابق */
        .highlight {
            background-color: #ffeb3b;
            font-weight: bold;
            padding: 1px 2px;
            border-radius: 2px;
        }

        /* إخفاء العناصر غير المطابقة */
        .sidebar-list.hidden {
            display: none !important;
        }

        /* رسالة عدم وجود نتائج */
        .no-results {
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-style: italic;
        }
    </style>

    <!-- JavaScript للبحث -->
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('sidebar-search');
            const clearSearch = document.getElementById('clear-search');
            const searchIcon = document.querySelector('.search-icon');
            const sidebarMenu = document.getElementById('sidebar-menu');
            const sidebarWrapper = document.getElementById('sidebar-wrapper');
            
            if (!searchInput) return;
            
            let noResultsMessage = null;// أول ما المستخدم يركز على السيرش

            // إظهار/إخفاء أيقونة المسح
            searchInput.addEventListener('input', function() {
                if (sidebarWrapper.classList.contains("close_icon")) {
                  sidebarWrapper.classList.remove("close_icon");
                }

                
                if (this.value.length > 0) {
                    clearSearch.style.display = 'block';
                    searchIcon.style.display = 'none';
                } else {
                    clearSearch.style.display = 'none';
                    searchIcon.style.display = 'block';
                }
                
                performSearch(this.value);
            });
            
            // مسح البحث
            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                clearSearch.style.display = 'none';
                searchIcon.style.display = 'block';
                performSearch('');
                searchInput.focus();
            });
            
            // وظيفة البحث الرئيسية
            function performSearch(searchTerm) {
                const allItems = document.querySelectorAll('.sidebar-list');
                const mainTitles = document.querySelectorAll('.sidebar-main-title');
                let hasResults = false;
                
                // إزالة رسالة عدم وجود نتائج السابقة
                if (noResultsMessage) {
                    noResultsMessage.remove();
                    noResultsMessage = null;
                }
                
                if (!searchTerm.trim()) {
                    // إذا كان البحث فارغ، أظهر كل العناصر
                    allItems.forEach(item => {
                        item.classList.remove('hidden');
                        removeHighlights(item);
                        
                        // إغلاق القوائم المفتوحة
                        const submenu = item.querySelector('.sidebar-submenu');
                        if (submenu) {
                            submenu.style.display = 'none';
                        }
                    });
                    
                    mainTitles.forEach(title => title.style.display = 'block');
                    return;
                }
                
                // تحويل النص للبحث
                const searchLower = searchTerm.toLowerCase().trim();
                
                let co=0;
                allItems.forEach(item => {
                    // تجاهل العناصر الخاصة
                    if (item.classList.contains('back-btn') || 
                        item.classList.contains('sidebar-search-box') || 
                        item.classList.contains('sidebar-main-title')) {
                        return;
                    }
                    
                    const itemText = getItemText(item);
                    const isMatch = matches(item, searchLower);
                    item.classList.add('hidden');
                    removeHighlights(item);

                    
                    if (isMatch) {
                        hasResults = true;
                        item.classList.remove('hidden');
                        
                        // تسليط الضوء على النص المطابق
                        highlightText(item, searchTerm);
                        
                        // إذا كانت خدمة فرعية مطابقة، أظهر الخدمة الرئيسية
                        if (item.classList.contains('sub-item') || item.classList.contains('sub-sub-item')) {
                            const parentItem = findParentItem(item);
                            if (parentItem) {
                                parentItem.classList.remove('hidden');
                                
                                // فتح القائمة الفرعية
                                const submenu = parentItem.querySelector('.sidebar-submenu');
                                if (submenu) {
                                    submenu.style.display = 'block';
                                }
                            }
                        }else{
                            removeHighlights(item);
                            const parentItem = findParentItem(item);
                            if (parentItem) {
                                parentItem.classList.add('hidden');
                                
                                // فتح القائمة الفرعية
                                const submenu = parentItem.querySelector('.sidebar-submenu');
                                if (submenu) {
                                    submenu.style.display = 'none';
                                }
                            }
                            
                        }
                        
                        // إذا كانت خدمة رئيسية لها خدمات فرعية مطابقة، أظهرها
                        const subItems = item.querySelectorAll('.sub-sub-item');
                        subItems.forEach(subItem => {
                            const subText = getItemText(subItem);
                            if (subText.toLowerCase().includes(searchLower)) {
                                console.log(`subItems=${subItems.length-1} ,co=${co}`);
                                if(co==0){
                                subItem.classList.remove('hidden');
                                }
                                highlightText(subItem, searchTerm);
                                
                                // فتح القائمة الفرعية
                                const submenu = item.querySelector('.sidebar-submenu');
                                if (submenu && co==0) {
                                    submenu.style.display = 'block';
                                }
                            }else{
                                
                                // فتح القائمة الفرعية
                                const submenu = item.querySelector('.sidebar-submenu');
                                if (submenu) {
                                    submenu.style.display = 'none';
                                }
                            subItem.classList.add('hidden');
                            removeHighlights(subItem);
                            }
                        });
                        co++;
                        
                    } else {
                        item.classList.add('hidden');
                        removeHighlights(item);
                    }
                });
                
                // إخفاء عنوان "الخدمات" أثناء البحث
                mainTitles.forEach(title => title.style.display = hasResults ? 'none' : 'block');
                
                // إظهار رسالة عدم وجود نتائج
                if (!hasResults) {
                    showNoResults();
                }
            }
            function matches(item, searchLower) {
                // النص المباشر للعنصر
                const itemText = getItemText(item).toLowerCase();
                if (itemText.includes(searchLower)) return true;

                // تحقق من العناصر الفرعية (sub-sub-item)
                const subItems = item.querySelectorAll('.sub-sub-item');
                for (let subItem of subItems) {
                    const subText = getItemText(subItem).toLowerCase();
                    if (subText.includes(searchLower)) return true;
                }

                return false;
            }

            // الحصول على نص العنصر
            function getItemText(item) {
                const span = item.querySelector('span');
                if (span) return span.textContent || '';
                
                const link = item.querySelector('a');
                if (link) return link.textContent || '';
                
                return item.textContent || '';
            }
            
            // البحث عن العنصر الأب
            function findParentItem(item) {
                let parent = item.parentElement;
                while (parent && !parent.classList.contains('sidebar-list')) {
                    parent = parent.parentElement;
                }
                return parent && parent.classList.contains('sidebar-list') ? parent : null;
            }
            
            // تسليط الضوء على النص
            function highlightText(item, searchTerm) {
                const spans = item.querySelectorAll('span');
                const links = item.querySelectorAll('a');
                
                [...spans, ...links].forEach(element => {
                    if (element.querySelector('.highlight')) return; // تجنب التكرار
                    
                    const text = element.textContent;
                    const regex = new RegExp(`(${escapeRegExp(searchTerm)})`, 'gi');
                    
                    if (regex.test(text)) {
                        element.innerHTML = text.replace(regex, '<span class="highlight">$1</span>');
                    }else{
                        removeHighlights(item);
                    }
                });
            }
            
            // إزالة التسليط
            function removeHighlights(item) {
                const highlights = item.querySelectorAll('.highlight');
                highlights.forEach(highlight => {
                    const parent = highlight.parentNode;
                    if(parent)
                    parent.textContent = parent.textContent; // هذا سيزيل كل HTML ويحتفظ بالنص فقط
                });
            }
            
            // تجهيز النص للتعبير النمطي
            function escapeRegExp(string) {
                return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
            }
            
            // إظهار رسالة عدم وجود نتائج
            function showNoResults() {
                if (!noResultsMessage) {
                    noResultsMessage = document.createElement('li');
                    noResultsMessage.className = 'no-results';
                    noResultsMessage.textContent = searchInput.placeholder.includes('Search') 
                        ? 'No services found' 
                        : 'لم يتم العثور على خدمات';
                    
                    const sidebarLinks = document.querySelector('.sidebar-links');
                    if (sidebarLinks) {
                        sidebarLinks.appendChild(noResultsMessage);
                    }
                }
            }
        });
    </script>
        <!-- Page Sidebar Ends-->
      <div class="page-body">
                <link rel="stylesheet" href="../partials/Dashboard/dashboardstyle.css?v=1" />
<script src="https://unpkg.com/lucide@latest"></script>
<style>
    #GetDashBoardVirtualClassesSt {
        order: 3 !important;
    }
    #ShowStudentChatBot{
            order: 3 !important;
        }
    /* ترتيب الموبايل (≤768px) */
    @media (max-width: 768px) {
        #GetDashBoardVirtualClassesSt {
            order: 1 !important;
        }
        #ShowStudentChatBot{
            order: 4 !important;
        }
        /* يظهر أول على الموبايل */
    }
</style>
<script>
    function CreateFileSubjectsForStudents() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != '') {}
            }
        };
        xmlhttp.open("GET", "../ControlPanel/AjaxPages/CreateFileSubjectsForStudentsAjax.php", true);
        xmlhttp.send();
    }
    //<!-- اضافة المقرأة -->
    function ShowStudentMaqraa() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("ShowStudentMaqraa").innerHTML = this.responseText;
                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/MaqraaModule/AjaxPages/MaqraaStudentDashboard.php",
            true);
        xmlhttp.send();
    }

    function GetCurrentDateData() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetCurrentDateData").innerHTML = this.responseText;
                    const progressFill = document.querySelector('.custom-progress-fill');
                    if (progressFill) {
                        // console.log(document.getElementById("perDays").innerHTML);
                        progressFill.style.width = document.getElementById("perDays").innerHTML;
                    }
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/AjaxPages/NewGetCurrentDateData.php", true);
        xmlhttp.send();
    }

    function GetDashBoardVirtual() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetDashBoardVirtualClassesSt").style.display = 'inline';
                    document.getElementById("GetDashBoardVirtualClassesSt").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/VirtualClasses/AjaxPages/GetDashBoardVirtualClassesSt.php",
            true
        );
        xmlhttp.send();
    }

    function GetStTimeTable() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetStTimeTable").style.display = 'inline';
                    document.getElementById("GetStTimeTable").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/TimeTable/AjaxPages/NewGetStTimeTable.php", true);
        xmlhttp.send();
    }

    function GetTotalLibCount() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("TotalLibCount").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/Library/AjaxPages/GetTotalLibCountAjax.php", true);
        xmlhttp.send();
    }

    function GetHomW1CountToDay() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetHomW1CountToDay").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/HomeWorkWP/AjaxPages/GetCurrentHomeworkWAjax.php?DirectC=1",
            true);
        xmlhttp.send();
    }

    function GetHomW2CountToDay() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetHomW2CountToDay").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/HomeWorkWP/AjaxPages/GetCurrentHomeworkWAjax.php?DirectC=2",
            true);
        xmlhttp.send();
    }

    function GetCoursesCount() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != '') {
                    let result = this.responseText.split(',');
                    for (let i = 0; i < result.length; i++) {
                        //كونديشن التأكد من وجود الحقل
                        if (document.getElementById("C" + parseInt(i + 1))) {
                            document.getElementById("C" + parseInt(i + 1)).innerHTML = "" + result[i].trim() + "";
                        }
                    }
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/TrainingCourses/AjaxPages/GetCoursesCountST.php",
            true);
        xmlhttp.send();
    }

    function GetSurveyCount() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetSurveyCount").innerHTML = this.responseText.trim();
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/Surveys/AjaxPages/ShowSurveyCountDashBoard.php",
            true);
        xmlhttp.send();
    }

    function GetCircularCount() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    if (parseInt(this.responseText.trim()) > 0) {
                        document.getElementById("Cri").innerHTML = "(" + this.responseText.trim() + ") تعميم جديد";
                        if (document.getElementById("Circularsbtn")) {
                            setInterval(document.getElementById("Circularsbtn").click(), 300);
                        }

                    } else {
                        document.getElementById("Cri").innerHTML = "(" + this.responseText.trim() + ") تعميم";
                    }
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/Circulars/AjaxPages/GetCircularDashBoard.php",
            true);
        xmlhttp.send();
    }

    function GetEHomWorkCountToDay() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetEHomWorkCountToDay").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/EHomeworks/AjaxPages/GetEHomWorkCountToDay.php",
            true);
        xmlhttp.send();
    }

    function GetEExamCountToDay() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("GetEExamCountToDay").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/EHomeworks/AjaxPages/GetEExamCountToDay.php", true);
        xmlhttp.send();
    }

    function GetreminderArchivingCapabilitiesExams() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("reminderArchivingCapabilitiesExams").innerHTML = this.responseText;
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/ArchivingCapabilitiesExams/AjaxPages/GetremindArchivingCapabilitiesExams.php",
            true);
        xmlhttp.send();
    }

    function ShowStudentMedals() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("ShowStudentMedals").innerHTML = this.responseText;
                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/SessionManagement/AjaxPages/ShowStudentMedals.php",
            true);
        xmlhttp.send();
    }



    function GettotalNeqat() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText != '') {
                    let result = this.responseText.split(',');
                    document.getElementById("totalNeqat").innerHTML = result[0];
                }
            }
        };
        xmlhttp.open("GET", "../ControlPanel/Services/Neqaty/AjaxPages/GettotalNeqatST.php", true);
        xmlhttp.send();
    }
    function ShowStudentsFollowupForms() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '' && this.responseText.trim() =='1') {
                    document.getElementById("ShowStudentsFollowupForms").style.display = 'block';
                }
            }
        };
        xmlhttp.open("GET","../ControlPanel/Services/FollowupForms/AjaxPages/ShowStudentsFollowupForms.php",true);
        xmlhttp.send();
    }
    // 7-11-2026 التوجيه الصحي
    function ShowHealth() {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                if (this.responseText.trim() != '') {
                    document.getElementById("ShowHealth").innerHTML = this.responseText;
                    if (window.lucide) {
                        lucide.createIcons();
                    }
                }
            }
        };
        xmlhttp.open("GET",
            "../ControlPanel/Services/HealthFeed/HealthFeedDashboard.php",
            true);
        xmlhttp.send();
    }


    const functionsToCall = [
        {
            func: GetDashBoardVirtual,
            shouldExecute: true
        },
        {
            func: CreateFileSubjectsForStudents,
            shouldExecute: true
        },
        {
            func: ShowHealth,
            shouldExecute: true
        },
        {
            func: GetCurrentDateData,
            shouldExecute: true
        },
        
        {
            func: ShowStudentMaqraa,
            shouldExecute: true
        },
        {

            func: GetStTimeTable,
            shouldExecute: true
        },
        {
            func: GetTotalLibCount,
            shouldExecute: true
        },
        {
            func: GetHomW1CountToDay, //
            shouldExecute: false
        },
        {
            func: GetHomW2CountToDay,
            shouldExecute: false
        },
        {
            func: GetCoursesCount,
            shouldExecute: true
        },
        {
            func: GettotalNeqat,
            shouldExecute: true
        },
        {
            func: ShowStudentMedals,
            shouldExecute: true
        },
        {
            func: GetEHomWorkCountToDay,
            shouldExecute: true
        },
        {
            func: GetEExamCountToDay,
            shouldExecute: true
        },
        {
            func: GetreminderArchivingCapabilitiesExams,
            shouldExecute: true
        },
        {
func: ShowStudentsFollowupForms,
shouldExecute: true
}

    ];
    // Function to stop specific functions
    function stopFunctions(functionNames) {
        functionsToCall.forEach((item) => {
            // Check if the function name is in the provided list, if so, set shouldExecute to false
            if (functionNames.includes(item.func.name)) {
                item.shouldExecute = false;
            }
        });
    }
    // Example usage to stop specific functions
    stopFunctions([""]);
</script>
<script name="sc1xxnnnn">
    function callajax() {
        // Helper function to call the next function in the array
        function callNextFunction(index) {
            console.log("index=" + index);
            if (index < functionsToCall.length) {
                // Check if the current function should be executed
                if (functionsToCall[index].shouldExecute) {
                    // Call the current function
                    functionsToCall[index].func();
                }

                // After the current function is called, set a timeout to call the next one
                // This is to ensure that the previous function has enough time to complete
                setTimeout(function() {
                    callNextFunction(index + 1);
                }, 500); // Adjust the timeout as needed (1000ms = 1 second)
            }
        }

        // Start calling the functions from the first one
        callNextFunction(0);
    }
</script>
<div class="container-fluid">
    <div class="row">
        <div class="col-xxl-12 col-xl-12 box-col-12 col-md-12 proorder-md-1 " Id="GetCurrentDateData">

        </div>


        <div class="col-xl-4 col-sm-12  order-xl-1 order-md-2 order-sm-2 order-2">
            <div class="row">
            <div class="col-xl-12 col-lg-12 col-sm-12 mt-2  mb-2" style="cursor: pointer;"
                    onclick="location.href='../ControlPanel/Services/EHomeworks/Ehomindex.php'">
                    <div class="dashboard-card dashboard-forms" title="الواجبات الإلكترونية"
                        style="cursor: pointer;background: linear-gradient(135deg, var(--theme-default),var(--theme-default));height:auto;color:#dfe3e1"

                        onclick="location.href='../ControlPanel/Services/EHomeworks/Ehomindex.php'">
                        <i class="f-w-600 fa fa-file-text dashboard-icon"></i>
                        <h4 class="dashboard-title" style="color:#dfe3e1">الواجبات الإلكترونية </h4>
                        <p class="dashboard-count" data-target="0" id="GetEHomWorkCountToDay">0</p>
                    </div>
                </div>
                <!-- 16-10-2026 teams -->
                <div class="col-xl-4 col-lg-4 col-sm-12 mt-2 mb-2">

                    <a href="https://www.cambridgeone.org/login" target="_blank" class="btn btn-light shadow p-3" style="border-radius: 12px;height: -webkit-fill-available;width:100%">
                        <img src="../partials/Dashboard/cambridgelogo.png"
                            alt="Cambridge Logo"
                            style="height: 60px; width:auto;">
                        <span style="font-weight: bold; font-size: 18px; color:#333;">Cambridge One</span>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 mt-2 mb-2">

                    <a href="https://www.havemath.com/" target="_blank" class="btn btn-light shadow p-3" style="border-radius: 12px;height: -webkit-fill-available;width:100%">
                        <img src="../partials/Dashboard/havemathlogo.png"
                            alt="havemath Logo"
                            style="height: 60px; width:auto;">
                        <span style="font-weight: bold; font-size: 18px; color:#333;"> أفكار الرياضيات <br></span>
                    </a>
                </div>
                <div class="col-xl-4 col-lg-4 col-sm-12 mt-2 mb-2">

                    <a href="../ControlPanel/Services/MicrosoftTeams/StudentAccountInfo.php"  class="btn btn-light shadow p-3" style="border-radius: 12px;height: -webkit-fill-available;width:100%">
                        <img src="..//partials/MobileDashboard/images/Teams.webp"
                            alt="havemath Logo"
                            style="height: 100px; width:auto;">
                    </a>
                </div>

                <div class="col-xl-12 col-sm-12" id="GetStTimeTable">

                </div>
                <div class="col-xl-12 col-xl-100 proorder-md-13">
                    <Div class="card">
                        <div class="excuse-card"
                            onclick="location.href='../ControlPanel/Services/StudentsOperation/StudentOperationsLogRep.php'">
                            <div class="excuse-icon"><i class="fa fa-file-text"></i></div>
                            <div class="excuse-title">إرفاق أعذار الغياب</div>
                            <p class="excuse-text">يمكنك رفع أعذار الغياب أو التأخر بكل سهولة</p>
                            <div class="excuse-bg-icon"><i class="fa fa-calendar"></i></div>
                        </div>
                    </Div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-12 order-xl-2 order-md-1 order-sm-1 order-1">
            <div class="row">
         
                <div class="col-xl-12 col-lg-12 col-sm-12 mt-2  order-2  mb-2" style="cursor: pointer;"
                    onclick="location.href='../ControlPanel/Services/EHomeworks/Ehomindex.php'">

                    <div class="dashboard-card dashboard-notes" title="الاختبارات الإلكترونية" style="cursor: pointer;background: linear-gradient(135deg, #dfe3e1, #dfe3e1);height:auto;color:var(--theme-default)"
                        onclick="location.href='../ControlPanel/Services/EHomeworks/Ehomindex.php'">
                        <i class="f-w-600 fa fa-file dashboard-icon"></i>
                        <h4 class="dashboard-title f-14 txt-primary">الاختبارات الإلكترونية</h4>
                        <p class="dashboard-count" data-target="0" id="GetEExamCountToDay">0</p>
                    </div>
                </div>
                <div class="col-xxl-12 col-sm-12 box-col-12 xl-12  order-4 mb-2" onclick="location.href='Services/CommunicationForums/CommunicationForumStudent.php'">
                    <div class="mb-3 Communication-container status-pending">
                        <div class="Communication-icon">
                            <img src="Services/CommunicationForums/icon-chat.gif"
                                alt="Communication Icon" />
                        </div>
                        <span class="Communication-text f-18 f-w-600">مجموعات التواصل الفوري</span>
                    </div>
                </div>

                <div class="col-xl-12 col-sm-12  order-3" id="GetDashBoardVirtualClassesSt">

                </div>
                <div class="col-xl-12 col-md-12 order-3" id="ShowStudentChatBot"  style="cursor: pointer;" onclick="location.href='../ControlPanel/Services/StudentChatBot/StudentChatBot.php'">
                    <Style>
                        .ai-super-card {
                            position: relative;
                            height: 130px;
                            background:linear-gradient(to right, #43cea2 0%, #185a9d  51%, #43cea2  100%);
                            color: white;    
                            border-radius: 25px;
                            overflow: hidden;
                            display: flex;
                            align-items: center;
                            gap: 20px;
                            padding: 20px;
                            cursor: pointer;
                            transition: transform .5s ease, box-shadow .5s ease;
                            box-shadow: 0 10px 30px rgba(41, 35, 35, 0.12);
                            margin-bottom: 10px;
                        }

                        .ai-super-card:hover {
                            transform: translateY(-7px) rotate3d(1, 1, 0, 6deg);
                            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
                        }

                        /* Canvas للخلفيات المتحركة */
                        .bg-canvas {
                            position: absolute;
                            inset: 0;
                            z-index: 0;
                        }

                        /* أشكال هندسية كبيرة تتحرك */
                        .floating-shape {
                            position: absolute;
                            border-radius: 50%;
                            filter: blur(40px);
                            opacity: 0.5;
                            animation: float 8s infinite ease-in-out alternate;
                        }

                        .shape1 {
                            width: 180px;
                            height: 180px;
                            top: -40px;
                            left: -30px;
                        }
                        @keyframes float {
                            0% {
                                transform: translateY(0) translateX(0) scale(1);
                            }

                            100% {
                                transform: translateY(-20px) translateX(15px) scale(1.15);
                            }
                        }

                        /* Badge */
                        .badge-new {
                            position: absolute;
                            top: 10px;
                            left: 10px;
                            padding: 4px 12px;
                            background: linear-gradient(45deg, #ff006a, #ffcc00);
                            border-radius: 12px;
                            color: #fff;
                            font-weight: bold;
                            font-size: 13px;
                            animation: neon 2s infinite;
                            box-shadow: 0 0 15px rgba(255, 0, 120, 0.6);
                            z-index: 3;
                        }

                        @keyframes neon {
                            0% {
                                box-shadow: 0 0 6px rgba(255, 0, 120, 0.5);
                            }

                            100% {
                                box-shadow: 0 0 18px rgba(255, 0, 120, 1);
                            }
                        }

                        /* icon */
                        .icon-zone {
                            z-index: 3;
                            font-size: 50px;
                            animation: pulse 1.5s infinite alternate;
                        }

                        @keyframes pulse {
                            0% {
                                transform: scale(1);
                            }

                            100% {
                                transform: scale(1.13);
                            }
                        }

                        /* text */
                        .text-zone {
                            z-index: 3;
                        }

                        .text-zone h3 {
                            margin: 0;
                            font-size: 22px;
                            font-weight: 700;
                            color: white;    

                        }

                        .text-zone p {
                            margin: 5px 0 0;
                            font-size: 14px;
                            opacity: 0.8;
                            color: white;    

                        }
                    </style>
                    <div class="">
                    <div class="ai-super-card">
                        <canvas class="bg-canvas"></canvas>

                        <div class="floating-shape shape1"></div>

                        <span class="badge-new">جديد ✨</span>

                        <div class="icon-zone">
                        <img src="../ControlPanel/Services/StudentChatBot/graident-ai-robot-vectorart.png" style="height: 100px;width: 100px;">

                        </div>

                        <div class="text-zone text-center">
                            <h3>مساعدك الذكي</h3>
                            <p>رفيقك الشخصي نحو التعلم</p>
                        </div>
                    </div>
                    </div>
                    <script>
                        const canvas = document.querySelector(".bg-canvas");
                        const ctx = canvas.getContext("2d");

                        canvas.width = canvas.offsetWidth;
                        canvas.height = canvas.offsetHeight;

                        let particles = [];

                        for (let i = 0; i < 30; i++) {
                            particles.push({
                                x: Math.random() * canvas.width,
                                y: Math.random() * canvas.height,
                                r: Math.random() * 4 + 2,
                                dx: (Math.random() - 0.5) * 0.6,
                                dy: (Math.random() - 0.5) * 0.6
                            });
                        }

                        function animate() {
                            ctx.clearRect(0, 0, canvas.width, canvas.height);

                            particles.forEach(p => {
                                ctx.beginPath();
                                ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
                                ctx.fillStyle = "rgba(0,0,0,0.15)";
                                ctx.fill();

                                p.x += p.dx;
                                p.y += p.dy;

                                if (p.x < 0 || p.x > canvas.width) p.dx *= -1;
                                if (p.y < 0 || p.y > canvas.height) p.dy *= -1;
                            });

                            requestAnimationFrame(animate);
                        }

                        animate();
                    </script>


                </div>
                <div class="col-xxl-12 col-sm-12 box-col-12 xl-12 order-5" style="display: none;" id="ShowStudentsFollowupForms">
                    <div class="mb-3">
                        <div class="waiting-pillxx exam-card"
                            onclick="location.href='../ControlPanel/Services/FollowupForms/StudentsFollowupForms.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="icofont icofont-files pulse"></i>
                            </div>
                            <span class="f-18 f-w-600"> سجل متابعة الطلاب اليومي </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-xl-100 col-md-6  order-5">
                    <Div class="card">
                        <div class="course-stats-wrapper">
                            <h2 class="course-stats-title f-18">
                                <i class="f-w-600 fa fa-desktop"></i> الدورات التدريبية                            </h2>
                            <div class="course-stats-grid">
                                <a href="Services/TrainingCourses/CoursesShow.php" class="course-card status-ongoing">
                                    <div class="card-content">
                                        <i class="f-w-600 fa fa-play stat-icon"></i>
                                        <span class="stat-label">الدورات التدريبية (<span id="C3">0</span>)
                                        </span>
                                    </div>
                                </a>
                                <a href="Services/TrainingCourses/CoursesShow.php" class="course-card status-pending">
                                    <div class="card-content">
                                        <i class="f-w-600 icofont icofont-sand-clock  stat-icon"></i>
                                        <span class="stat-label">نماذج الاختبارات (<span id="C1">0</span>)</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </Div>
                </div>
                <div class="col-xl-12 col-sm-12  order-5">
                    <div class="health-card-green"
                        onclick="location.href='../ControlPanel/Services/SchoolClinics/SudentMedicalHistoryDetST.php?SCode=bRED2_wnhS-H_vtehnis8Ct6TkwzMWxwZS9qa1Nlc1ZyVjJxUlE9PQ=='">
                        <div class="health-icon-green">
                            <img src="../../../ControlPanel/Services/SchoolClinics/imgs/medical-record.gif"
                                alt="Health Icon" />
                        </div>
                        <div class="health-text-green">
                            <h3>السجل الطبي للطالب</h3>
                            <p>تابع كل التفاصيل الصحية الخاصة بك بسهولة</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-12  order-xl-3 order-md-3 order-sm-3 order-3">

            <div class="row">
                <div class="col-xl-12 col-lg-12 col-sm-12 mt-2  mb-2"
                    onclick="location.href='../ControlPanel/Services/Library/TeacherLibraryStudents.php'"
                    style="cursor: pointer;">
                    <div class="dashboard-card dashboard-circulars" title="عدد ملفات المكتبة"
                        onclick="location.href='../ControlPanel/Services/Library/TeacherLibraryStudents.php'"
                        style="cursor: pointer;background: linear-gradient(135deg, var(--theme-default),var(--theme-default));height:auto;color:#dfe3e1">
                        <i class="f-w-600 fa fa-list-alt dashboard-icon"></i>
                        <h4 class="dashboard-title f-14" style="color:#dfe3e1">عدد ملفات المكتبة</h4>
                        <p class="dashboard-count" data-target="0" id="TotalLibCount">0</p>
                    </div>
                </div>
     
                <!-- اضافة المقرأة -->
                <div class="col-xl-12 col-md-12 " id="ShowStudentMaqraa" style="cursor: pointer;" onclick="location.href='../ControlPanel/Services/MaqraaModule/StudentMaqraSessions.php'">

                </div>
                <!-- اضافة المكتبة7-11-2026 -->
                <div class="col-xl-12 col-md-12 " id="ShowHealth" style="cursor: pointer;" onclick="location.href='../ControlPanel/Services/HealthFeed/HealthFeedStudent.php'">

                </div>
                <div class="col-xl-12 col-md-12 " id="reminderArchivingCapabilitiesExams">

                </div>
                <div class="col-xl-12 col-md-12 " id="ShowStudentMedals" style="cursor: pointer;" onclick="location.href='../ControlPanel/Services/SessionManagement/StudentPerformanceReport.php'">

                </div>


                <div class="col-xl-12 col-md-12 ">
                    <div class="mb-3">
                        <div class="waiting-pillxx exam-card"
                            onclick="location.href='../ControlPanel/Services/Plans/StudentWeeklyPlan.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="fa fa-calendar pulse"></i>

                            </div>
                            <span class="f-18 f-w-600">الخطة الأسبوعية </span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="mb-3">
                        <div class="waiting-pillxx2 exam-card"
                            onclick="location.href='../ControlPanel/Services/SelfExams/SelfExams.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="icofont icofont-brainstorming pulse"></i>

                            </div>
                            <span class="f-18 f-w-600">اختبر نفسك </span>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="mb-3">
                        <div class="waiting-pillxx exam-card"
                            onclick="location.href='../ControlPanel/Services/Neqaty/StNeqatyDetails.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="fa fa-trophy pulse"></i>

                            </div>
                            <span class="f-18 f-w-600">إجمالي نقاطك (<span id="totalNeqat">0</span>)</span>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="mb-3">
                        <div class="waiting-pillxx2 exam-card"
                            onclick="location.href='../ControlPanel/Services/ExamTable/ShowStExamTable.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="fa fa-calendar-o pulse"></i>
                            </div>
                            <span class="f-18 f-w-600">جدول الاختبارات</span>
                        </div>

                    </div>
                </div>
                <div class="col-xl-12 col-md-12">
                    <div class="mb-3">
                        <div class="waiting-pillxx exam-card"
                            onclick="location.href='../ControlPanel/Services/TrainingCourses/TrainingCoursesEnded.php'">
                            <div class="sparkle"></div>
                            <div class="exam-icon">
                                <i class="fa fa-graduation-cap pulse"></i>
                            </div>
                            <span class="f-18 f-w-600">عرض شهادتك في الدورات</span>
                        </div>

                    </div>
                </div>





            </div>

        </div>
    </div>
</div>
</div>

      </div>
      <!-- Container-fluid Ends-->
      <!-- Popup الاعلان-->
      <input type="hidden" name="exit" id="entrance" value="swing" />
      <input type="hidden" name="exit" id="exit" value="rollOut" />
      <div class="modal fade" id="myAdvertiseModel" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="vcenter11">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                <div class="modal-toggle-wrapper">
                  <button class="btn-close theme-close btnmodel1" type="button" data-bs-dismiss="modal"></button>
                  <div class="card overflow-hidden">
                    <div class="animate-widget">
                      <div id="myAdvertiseModelDet" style="width: 100%;"><img class="img-fluid" src="../../../assets/images/slider/6.jpg" alt="Drawing-room"></div>
                      <div class="text-center p-25">
                        <p class="text-muted mb-0"><strong class="txt-danger">إعلان !!!</strong> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="DivOkAdvertise" style="width: 100%;"></div>

  </div>
  </div>

  </div>
  </div>
  
<style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700&display=swap');
    
    .routine-notification {
        position: fixed;
        top: 60px;
        left: -450px;
        background: linear-gradient(135deg, 
            rgba(255, 255, 255, 0.95) 0%,
            rgba(255, 255, 255, 0.9) 100%
        );
        backdrop-filter: blur(20px);
        -webkit-backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 
            0 25px 45px rgba(0, 0, 0, 0.1),
            0 0 0 1px rgba(255, 255, 255, 0.1) inset,
            0 8px 32px rgba(99, 98, 231, 0.15);
        border-radius: 20px;
        padding: 0;
        width: 420px;
        max-width: 90vw;
        transition: all 0.8s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        z-index: 9999;
        font-family: 'Cairo', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        overflow: hidden;
        transform: scale(0.8) rotateY(-10deg);
        opacity: 0;
    }
    
    .routine-notification.show {
        left: 30px;
        transform: scale(1) rotateY(0deg);
        opacity: 1;
        animation: floatAnimation 6s ease-in-out infinite;
    }
    
    @keyframes floatAnimation {
        0%, 100% { transform: translateY(0px) scale(1); }
        50% { transform: translateY(-8px) scale(1.02); }
    }
    
    @keyframes shimmer {
        0% { background-position: -200% center; }
        100% { background-position: 200% center; }
    }
    
    @keyframes pulseGlow {
        0%, 100% { box-shadow: 0 0 20px rgba(99, 98, 231, 0.3); }
        50% { box-shadow: 0 0 40px rgba(99, 98, 231, 0.6); }
    }
    
    .notification-header {
        background: linear-gradient(135deg, 
            #667eea 0%, 
            var(--theme-default) 50%, 
            #6362e7 100%
        );
        background-size: 200% 200%;
        animation: gradientShift 4s ease infinite;
        color: white;
        padding: 20px 25px;
        font-weight: 700;
        font-size: 16px;
        position: relative;
        border-radius: 20px 20px 0 0;
        box-shadow: 0 4px 20px rgba(99, 98, 231, 0.3);
    }
    
    @keyframes gradientShift {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    
    .notification-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(
            45deg,
            transparent 30%,
            rgba(255, 255, 255, 0.1) 50%,
            transparent 70%
        );
        background-size: 200% 200%;
        animation: shimmer 3s infinite;
        border-radius: 20px 20px 0 0;
    }
    
    .notification-content {
        padding: 15px 10px 10px;
        background: linear-gradient(145deg, 
            rgba(255, 255, 255, 0.9) 0%,
            rgba(248, 250, 252, 0.8) 100%
        );
    }
    
    .notification-item {
        margin: 8px 0;
        padding: 12px;
        background: linear-gradient(135deg, 
            rgba(255, 255, 255, 0.8) 0%,
            rgba(240, 242, 247, 0.6) 100%
        );
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-right: 4px solid transparent;
        background-clip: padding-box;
        border-radius: 15px;
        font-size: 14px;
        line-height: 1.6;
        color: #2d3748;
        position: relative;
        overflow: hidden;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        animation: slideInUp 0.6s ease forwards;
        opacity: 0;
        transform: translateY(30px);
    }
    
    .notification-item:nth-child(1) { animation-delay: 0.1s; }
    .notification-item:nth-child(2) { animation-delay: 0.2s; }
    .notification-item:nth-child(3) { animation-delay: 0.3s; }
    
    @keyframes slideInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .notification-item::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(45deg, #667eea, var(--theme-default));
        animation: borderGlow 2s ease-in-out infinite;
    }
    
    @keyframes borderGlow {
        0%, 100% { opacity: 0.7; transform: scaleY(1); }
        50% { opacity: 1; transform: scaleY(1.1); }
    }
    
    .notification-item:hover {
        transform: translateY(-3px) scale(1.02);
        box-shadow: 
            0 15px 35px rgba(99, 98, 231, 0.15),
            0 5px 15px rgba(0, 0, 0, 0.08);
        background: linear-gradient(135deg, 
            rgba(255, 255, 255, 0.95) 0%,
            rgba(248, 250, 252, 0.8) 100%
        );
    }
    
    .notification-item .icon {
        font-size: 24px;
        margin-right: 12px;
        vertical-align: middle;
        display: inline-block;
        animation: iconBounce 2s ease-in-out infinite;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.1));
    }
    
    @keyframes iconBounce {
        0%, 100% { transform: scale(1); }
        50% { transform: scale(1.1) rotate(5deg); }
    }
    
    .notification-item .label {
        font-weight: 700;
        background: linear-gradient(45deg, #667eea, var(--theme-default));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        margin-right: 8px;
        font-size: 15px;
    }
    
    .notification-item .text {
        margin-top: 8px;
        color: #212731ff;
        font-weight: bold;
        line-height: 1.7;
        font-size: 14px;
        text-align: center;
    }
    
    .close-btnM {
        position: absolute;
        top: 12px;
        left: 12px;
        cursor: pointer;
        color: rgba(255, 255, 255, 0.9);
        font-size: 24px;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        z-index: 10;
    }
    
    .close-btnM:hover {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        transform: scale(1.1) rotate(90deg);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }
    
    .reopen-btn {
        position: fixed;
        bottom: 30px;
        left: 30px;
        background: linear-gradient(135deg, #667eea 0%, var(--theme-default) 100%);
        color: white;
        border: none;
        padding: 18px;
        border-radius: 50%;
        cursor: pointer;
        box-shadow: 
            0 8px 25px rgba(99, 98, 231, 0.4),
            0 0 0 0 rgba(99, 98, 231, 0.4);
        font-size: 20px;
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        animation: pulseGlow 3s ease-in-out infinite;
        backdrop-filter: blur(10px);
        border: 2px solid rgba(255, 255, 255, 0.1);
    }
    
    .reopen-btn:hover {
        transform: translateY(-5px) scale(1.1);
        box-shadow: 
            0 15px 40px rgba(99, 98, 231, 0.6),
            0 0 0 10px rgba(99, 98, 231, 0.1);
        animation: none;
    }
    
    .reopen-btn:focus {
        outline: none;
    }
    
    .reopen-btn:active {
        transform: translateY(-2px) scale(1.05);
    }
    
    /* تأثيرات إضافية للجمال */
    .notification-header .bell-icon {
        animation: bellRing 2s ease-in-out infinite;
        filter: drop-shadow(0 2px 4px rgba(0, 0, 0, 0.2));
    }
    
    @keyframes bellRing {
        0%, 50%, 100% { transform: rotate(0deg); }
        10%, 30% { transform: rotate(10deg); }
        20%, 40% { transform: rotate(-10deg); }
    }
    
    /* Responsive Design */
    @media (max-width: 768px) {
        .routine-notification {
            width: calc(100vw - 40px);
            left: -100vw;
            top: 40px;
        }
        .routine-notification.show {
            left: 20px;
        }
        
        .notification-header {
            padding: 18px 20px;
            font-size: 15px;
        }
        
        .notification-content {
            padding: 20px 15px 15px;
        }
        
        .notification-item {
            padding: 15px;
            margin: 10px 0;
        }
        
        .reopen-btn {
            width: 55px;
            height: 55px;
            bottom: 25px;
            left: 25px;
        }
    }
    
    /* Dark mode support */
    @media (prefers-color-scheme: dark) {
        .routine-notification {
            background: linear-gradient(135deg, 
                rgba(30, 41, 59, 0.95) 0%,
                rgba(51, 65, 85, 0.9) 100%
            );
            border: 1px solid rgba(148, 163, 184, 0.2);
        }
        
        .notification-content {
            background: linear-gradient(145deg, 
                rgba(30, 41, 59, 0.9) 0%,
                rgba(51, 65, 85, 0.8) 100%
            );
        }
        
        .notification-item {
            background: linear-gradient(135deg, 
                rgba(51, 65, 85, 0.8) 0%,
                rgba(71, 85, 105, 0.6) 100%
            );
            color: #e2e8f0;
        }
        
        .notification-item .text {
            color: #cbd5e1;
        }
    }
</style>

  <button class="js-triggeraNimation btn btn-primary" style="display: none;" id="Circularsbtn"></button>
  <input type="hidden" class="form-select input input--dropdown js-animations" value="bounceIn" />
  <script src="../assets/js/modal-Advertiseanimated.js"></script>
  <!-- latest jquery-->
  <div class="modal fade" id="myTicketModel" role="dialog" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="vcenter11">
        <div class="modal-dialog mdindex" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="btn-close theme-close btnmodel1" type="button" id="TicketButton"
                        data-bs-dismiss="modal" onclick="document.getElementById('AlertTP').innerHTML='';"></button>

                    <!-- ترجمة الدعم الفني -->
                    <h5 class="modal-title fs-5 text-center"
                        style="text-align: center;align:center !important;padding-left:45px">
                        تذاكر الدعم الفني                    </h5>
                    <h5 id="AlertTP"></h5>
                </div>
                <div class="modal-body">
                    <div class="modal-toggle-wrapper">
                        <div class="card overflow-hidden">
                            <div class="animate-widget" id="myTicketModelx">
                                <div id="myTicketModelDet" style="width: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    function checkFileZZZ(target, alertId, ElementExtention) {
        var typeX = target.accept;
        const acceptedExtensions = document.getElementById(ElementExtention).value;
        console.log('target.files[0].type=' + target.files[0].type);
        const file = target.files[0];
        const fileExtension = file.name.split('.').pop().toLowerCase();
        if (!acceptedExtensions.includes(fileExtension)) {
            target.value = '';
            document.getElementById(alertId).innerHTML = "هذا الملف غير  مدعوم يجب التأكد من رفع ملف " + typeX + " فقط";
            target.value = '';
            return false;
        }
        else if (target.files[0].size > 5 * 1024 * 1024) {
            target.value = '';
            document.getElementById(alertId).innerHTML = "حجم الملف كبير (اقصى حجم للملف 5MB)";
            return false;
        }
        else {
            document.getElementById(alertId).innerHTML = "";
            return true;

        }

    }  
</script>
<script src="../assets/js/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="../assets/js/icons/feather-icon/feather-icon.js"></script>
  <script>
    // 7-10-2026 إيقاف الفيديو عند قفل مودال الإعلان (تفريغ المحتوى بيوقف الـ iframe)
    document.getElementById('myAdvertiseModel').addEventListener('hidden.bs.modal', function () {
      destroyCpAdPlayer(); // 17-10-2026 وقف وتدمير مشغل الفيديو بتاعنا لو شغال (بيوقف الصوت والفيديو)
      document.getElementById('myAdvertiseModelDet').innerHTML = '';
    });
  </script>
  <script src="../assets/js/animation/animate-customhome.js"></script>

  <!-- scrollbar js-->
      <script src="../assets/js/scrollbar/simplebar.js"></script>
    <script src="../assets/js/scrollbar/custom.js"></script>
      <!-- Sidebar jquery-->
  
<!-- Sidebar jquery-->
<script src="../assets/js/config.js"></script>
<script src="../assets/js/sidebar-menu.js"></script>
<script src="../assets/js/sidebar-pin.js"></script>

  <!-- Plugins JS start-->

  <script src="../assets/js/chart/apex-chart/apex-chart.js"></script>
  <script src="../assets/js/chart/apex-chart/stock-prices.js"></script>
  <script src="../assets/js/chart/apex-chart/moment.min.js"></script>

  <script src="../assets/js/animation/wow/wow.min.js"></script>
  
<script src="../assets/js/slick/slick.min.js"></script>
<script src="../assets/js/slick/slick.js?ver=1.2" type="text/javascript" charset="utf-8"></script>
<script src="../assets/js/header-slick.js"></script>
<script src="../assets/js/notify/bootstrap-notify.min.js"></script>

      <!-- calendar js-->
  
    <!-- calendar js-->

    <!--<script src="assets/js/dashboard/default.js"></script>-->


    <script src="../assets/js/datepicker/date-range-picker/moment.min.js"></script>

    <script src="../assets/js/datepicker/date-range-picker/datepicker-range-custom.js"></script>
      <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../assets/js/height-equal.js"></script>
<script src="../assets/js/animation/wow/wow.min.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../assets/js/script1.js"></script>
<script src="../assets/js/theme-customizer/customizer.js?ver=1.14"></script>
<!-- Plugin used-->
<script>
    new WOW().init();
    document.querySelector(".page-body")?.addEventListener("click", function(e) {
        // تأكد إنه فعلاً ضغط داخل page-body أو أحد عناصرها
        const isInside = e.currentTarget.contains(e.target);
        if (isInside) {
            document.querySelector("#customizer-contain")?.classList.remove("open");
            document.querySelector("#customizer-links")?.classList.remove("open");
        }
    });
</script>
<script type="module" src="https://static.cloudflareinsights.com/beacon.min.js/vce701823e78c4301a35b7e07294d87301792088814092" integrity="sha512-UKNk8GbxkABxKcXYuLkO16EleLGUkcvJWtpSNmExE0Too3ZaFAxTscNWEc1OdAv5/BikHawapSCaiD2XCmp+Bw==" data-cf-beacon='{"version":"2024.11.0","token":"66f0cd912bc6424c9379f6878fbf65c3","r":1,"spa":2}' crossorigin="anonymous"></script>
</body>

</html>