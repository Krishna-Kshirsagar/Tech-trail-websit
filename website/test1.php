<!DOCTYPE html>
<html>
<head>
    <title>Protected Content</title>
    <style>
        body {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
        }
        
        .protected-content {
            position: relative;
            padding: 20px;
            background: #f5f5f5;
        }

        .watermark {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            opacity: 0.1;
            font-size: 48px;
            pointer-events: none;
            user-select: none;
            z-index: 1000;
        }

        img, video {
            pointer-events: none;
            -webkit-touch-callout: none;
        }
    </style>
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
    <div class="watermark">CONFIDENTIAL</div>
    
    <div class="protected-content">
        <h1>Protected Content</h1>
        <p>This is a sample protected page where copying, downloading, and screen capture attempts are discouraged.</p>
        <img src="/api/placeholder/400/300" alt="Sample Protected Image">
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <script>
        // Disable keyboard shortcuts
        document.addEventListener('keydown', (e) => {
            // Prevent PrintScreen
            if (e.key === 'PrintScreen') {
                e.preventDefault();
                return false;
            }
            
            // Prevent Ctrl + Shift + I (Developer Tools)
            if (e.ctrlKey && e.shiftKey && e.key === 'I') {
                e.preventDefault();
                return false;
            }
            
            // Prevent Ctrl + S (Save)
            if (e.ctrlKey && e.key === 's') {
                e.preventDefault();
                return false;
            }
            
            // Prevent Ctrl + P (Print)
            if (e.ctrlKey && e.key === 'p') {
                e.preventDefault();
                return false;
            }
        });

        // Disable right-click context menu
        document.addEventListener('contextmenu', (e) => {
            e.preventDefault();
        });

        // Clear clipboard on copy attempt
        document.addEventListener('copy', (e) => {
            e.clipboardData.setData('text/plain', '');
            e.preventDefault();
        });

        // Detect when window loses focus (potential screen recording)
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                console.log('Page visibility changed - possible screen recording attempt');
            }
        });

        // Periodically check if DevTools is open
        setInterval(() => {
            const threshold = 160;
            if (window.outerWidth - window.innerWidth > threshold || 
                window.outerHeight - window.innerHeight > threshold) {
                console.log('DevTools may be open');
            }
        }, 1000);
    </script>
</body>
</html>