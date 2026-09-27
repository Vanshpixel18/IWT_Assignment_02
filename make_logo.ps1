Add-Type -AssemblyName System.Drawing

$width = 520
$height = 100
$bmp = New-Object System.Drawing.Bitmap($width, $height)
$g = [System.Drawing.Graphics]::FromImage($bmp)
$g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::AntiAlias
$g.TextRenderingHint = [System.Drawing.Text.TextRenderingHint]::AntiAliasGridFit

# Background - Cream #FFFDF5
$bgBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 255, 253, 245))
$g.FillRectangle($bgBrush, 0, 0, $width, $height)

# Border - Dark Gold #B8860B
$borderPen = New-Object System.Drawing.Pen([System.Drawing.Color]::FromArgb(255, 184, 134, 11), 2)
$g.DrawRectangle($borderPen, 1, 1, $width - 2, $height - 2)

# Golden accents
$goldBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 212, 175, 55))
$darkGoldBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 184, 134, 11))
$darkTextBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::FromArgb(255, 74, 55, 0))
$whiteBrush = New-Object System.Drawing.SolidBrush([System.Drawing.Color]::White)

# 1. Circle Hotspot Shape (Center 50, 50, radius 35 -> X=15, Y=15, W=70, H=70)
# Center=(50, 50), r=35 -> coords "50,50,35"
$g.FillEllipse($goldBrush, 15, 15, 70, 70)
$g.DrawEllipse($borderPen, 15, 15, 70, 70)
$fontCircle = New-Object System.Drawing.Font("Georgia", 9, [System.Drawing.FontStyle]::Bold)
$sf = New-Object System.Drawing.StringFormat
$sf.Alignment = [System.Drawing.StringAlignment]::Center
$sf.LineAlignment = [System.Drawing.StringAlignment]::Center
$g.DrawString("HOME`n[Circle]", $fontCircle, $darkTextBrush, (New-Object System.Drawing.RectangleF(15, 15, 70, 70)), $sf)

# 2. Rectangle Hotspot Shape (X1=100, Y1=20, X2=200, Y2=80 -> coords "100,20,200,80")
$g.FillRectangle($darkGoldBrush, 100, 20, 100, 60)
$g.DrawRectangle($borderPen, 100, 20, 100, 60)
$fontRect = New-Object System.Drawing.Font("Georgia", 9, [System.Drawing.FontStyle]::Bold)
$g.DrawString("ABOUT US`n[Rect]", $fontRect, $whiteBrush, (New-Object System.Drawing.RectangleF(100, 20, 100, 60)), $sf)

# 3. Main Title & Branding on the right (X=215, Y=12)
$fontTitle = New-Object System.Drawing.Font("Georgia", 13, [System.Drawing.FontStyle]::Bold)
$fontSub = New-Object System.Drawing.Font("Georgia", 8.5, [System.Drawing.FontStyle]::Italic)
$fontTag = New-Object System.Drawing.Font("Georgia", 7.5, [System.Drawing.FontStyle]::Regular)

$g.DrawString("GYANGANGA INSTITUTE", $fontTitle, $darkTextBrush, 215, 12)
$g.DrawString("OF TECHNOLOGY & SCIENCES", $fontTitle, $darkGoldBrush, 215, 32)
$g.DrawString("Excellence in Engineering & Management Education", $fontSub, $darkTextBrush, 215, 56)
$g.DrawString("Approved by AICTE, New Delhi | Affiliated to RGPV & RDVV", $fontTag, $darkGoldBrush, 215, 75)

# Save image
$bmp.Save("logo.png", [System.Drawing.Imaging.ImageFormat]::Png)
$g.Dispose()
$bmp.Dispose()
Write-Host "logo.png created successfully"
