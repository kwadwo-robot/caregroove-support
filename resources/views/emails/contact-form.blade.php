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
                <h2 style="margin: 0;">Thank You for Contacting Us</h2>
            </div>
            <div class="content">
                <p>Dear {{ $data['name'] }},</p>
                <p>Thank you for reaching out to CareGroove Support Ltd. We have received your message and appreciate you taking the time to contact us.</p>
                <p>We will review your inquiry and get back to you as soon as possible, typically within 24 hours during business hours.</p>
                
                <h3 style="color: #0066cc; margin-top: 30px;">Your Message Details:</h3>
                <div class="field">
                    <div class="label">Subject:</div>
                    <div class="value">{{ $data['subject'] }}</div>
                </div>
                <div class="field">
                    <div class="label">Message:</div>
                    <div class="value">{{ $data['message'] }}</div>
                </div>

                <p style="margin-top: 30px;">If you have any urgent matters, please feel free to call us at <strong>07874240205</strong>.</p>
                <p>Best regards,<br><strong>CareGroove Support Ltd Team</strong></p>
            </div>
        @else
            <div class="header">
                <h2 style="margin: 0;">New Contact Form Submission</h2>
            </div>
            <div class="content">
                <p>A new contact form submission has been received:</p>
                
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
                    <div class="label">Subject:</div>
                    <div class="value">{{ $data['subject'] }}</div>
                </div>
                <div class="field">
                    <div class="label">Message:</div>
                    <div class="value">{{ $data['message'] }}</div>
                </div>
            </div>
        @endif

        <div class="footer">
            <p>&copy; 2026 CareGroove Support Ltd. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
