@component('mail::message')
<div align="center">
{{ $qr->full_name }}
</div>
<div align="center my-2">
PRESENT THIS QR TO THE REGISTRATION TEAM BEFORE ENTERING THE CDD GYMNASIUM.
</div>
<div align="center">
<img src="data:image/png;base64, {!! base64_encode(QrCode::format('png')->size(250)
->merge(public_path('images/logo.png'), 0.3, true)->errorCorrection('H')
->color(0, 28, 64)
->margin(3)
->generate(url('/tracings')."/".$qr->id)); !!} ">
</div>
<div align="center">
Best Regards,<br>
Colegio de Dagupan
@endcomponent
</div>
