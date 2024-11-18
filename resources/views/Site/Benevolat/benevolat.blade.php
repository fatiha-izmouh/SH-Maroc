@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/Benevolat/benevolat.css') }}">

<div class="mt-4 py-5">

<div class="header">
    <h1>انضم إلى مجتمعنا التطوعي</h1>
</div>

<div class="features">
    <div class="feature">
        <div class="icon text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/12783/12783578.png" alt="icon" width="42" height="42">
        </div>
        <p>هل أنت متطوع وترغب في الانضمام إلينا؟</p>
        <button class="button volunteer" onclick="window.location.href='/inscription/benevole'">تسجيل متطوع</button>
    </div>
    <div class="feature">
        <div class="icon text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/6701/6701354.png" alt="icon" width="42" height="42">
        </div>
        <p>هل أنت جمعية وتبحث عن تعاون؟</p>
        <button class="button partner" onclick="window.location.href='/inscription/partenaire'">كن شريكاً</button>
    </div>
</div>

<div class="title">
    <h2>لماذا تنخرط في العمل التطوعي؟</h2>
</div>

<div class="benefits">
    <div class="benefit">
        <img src="site/images/Benevolat/personal_development.png" alt="تطوير الذات">
        <h3>تطوير الذات</h3>
        <p>يمكن أن يكون العمل التطوعي مجزيًا للغاية على المستوى الشخصي.
        من خلال تقديم وقتهم ومهاراتهم، يكتسب المتطوعون تجارب جديدة، يعززون مهاراتهم، ويطورون شعورًا بالإنجاز</p>
    </div>
    <div class="benefit">
        <img src="site/images/Benevolat/community.png" alt="تأثير إيجابي على المجتمع">
        <h3>تأثير إيجابي على المجتمع</h3>
        <p>يوفر العمل التطوعي فرصة فريدة لمساعدة الآخرين والمساهمة في رفاهية المجتمع المحلي.
        من خلال الانخراط، يمكن للمتطوعين أن يحدثوا فرقًا حقيقيًا في حياة الأشخاص المحتاجين</p>
    </div>
    <div class="benefit">
        <img src="site/images/Benevolat/Connexion_Sociale.png" alt="اتصال اجتماعي">
        <h3>اتصال اجتماعي</h3>
        <p>من خلال المشاركة في أنشطة التطوع، يحصل الأفراد على فرصة لمقابلة أشخاص جدد، تكوين صداقات، وبناء شبكات اجتماعية قوية.
        يمكن أن يساهم ذلك في تقليل العزلة الاجتماعية وتعزيز الرفاهية العاطفية</p>
    </div>
</div>

<div class="section">
    <hr>
    <p>هل أنت مستعد لإحداث فرق؟ انضم إلينا اليوم</p>
    <button onclick="window.location.href='/inscription/benevole'">شارك</button>
    <hr>
</div>

</div>

@endsection
