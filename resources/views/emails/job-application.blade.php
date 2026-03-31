<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body { font-family: 'Outfit', Arial, sans-serif; color: #333; line-height: 1.6; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: linear-gradient(135deg, #0066cc 0%, #2d8659 100%); color: white; padding: 20px; border-radius: 8px 8px 0 0; }
        .content { background: #f9f9f9; padding: 20px; border-radius: 0 0 8px 8px; }
        .field { margin-bottom: 15px; }
        .label { font-weight: 600; color: #0066cc; }
        .value { color: #555; margin-top: 5px; }
        .footer { text-align: center; margin-top: 20px; color: #999; font-size: 12px; }
    </style>
</head>
<body>
    <div class="container">
        @if($isReply)
            <div class="header">
                <h2 style="margin: 0;">Thank You for Your Application</h2>
            </div>
            <div class="content">
                <p>Dear {{ $data['name'] }},</p>
                <p>Thank you for applying for the <strong>{{ $data['position'] }}</strong> position at CareGroove Support Ltd. We appreciate your interest in joining our team.</p>
                <p>We have received your application and will review it carefully. We will be in touch within the next 5-7 business days if your profile matches our requirements.</p>
                
                <p style="margin-top: 30px;">If you have any questions in the meantime, please don't hesitate to contact us at <strong>07874240205</strong> or <strong>info@caregroovesupport.co.uk</strong>.</p>
                <p>Best regards,<br><strong>CareGroove Support Ltd HR Team</strong></p>
            </div>
        @else
            <div class="header">
                <h2 style="margin: 0;">New Job Application Received</h2>
            </div>
            <div class="content">
                <p>A new job application has been submitted:</p>
                
                <div class="field">
                    <div class="label">Position:</div>
                    <div class="value">{{ $data['position'] }}</div>
                </div>
                <div class="field">
                    <div class="label">Name:</div>
                    <div class="value">{{ $data['name'] }}</div>
                </div>
                <div class="field">
                    <div class="label">Email:</div>
                    <div class="value"><a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></div>
                </div>
                <div class="field">
                    <div class="label">Phone:</div>
                    <div class="value"><a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a></div>
                </div>
                <div class="field">
                    <div class="label">Experience:</div>
                    <div class="value">{{ $data['experience'] }}</div>
                </div>
            </div>
        @endif

        <div class="footer">
            <p>&copy; 2026 CareGroove Support Ltd. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
