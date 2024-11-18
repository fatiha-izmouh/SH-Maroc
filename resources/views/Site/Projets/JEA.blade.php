@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/Projets/jea.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="py-5 my-5">
    
    <div class="section-intro">
        <h1>أكاديمية الشباب الرياديين (JEA)</h1>
        <div class="content">
            <p class="text">مشروع Life Makers Academy لإعادة تأهيل الشباب هو مشروع تابع لجمعية صناع الحياة المغرب، قائم على مبدأ تدريب الشباب ذوي الأفكار في مشاريع في مجالات علمية وفكرية ومهارية متنوعة لتكوين شباب واعٍ وفعال يؤمن بضرورة التغيير الفكري والاجتماعي والاقتصادي</p>
            <div class="logo">
                <img src="site/images/Logos/jea-maroc_logo.jpg" alt="Logo">
            </div>
        </div>
    </div>
    
    <div class="results">
        <h2>الفئة المستهدفة</h2>
        <div class="results-grid">
            <div class="result">
                <i class="fas fa-lightbulb"></i>
                <p>الشباب حديثو التخرج الذين لديهم أفكار مشاريع</p>
            </div>
            <div class="result">
                <i class="fas fa-briefcase"></i>
                <p>الشباب العاملون الذين لديهم مشاريع</p>
            </div>
            <div class="result">
                <i class="fas fa-building"></i>
                <p>أصحاب الشركات الناشئة أو الأعمال الصغيرة</p>
            </div>
        </div>
    </div>
    
    <div class="objectives">
        <h2>لأهداف العامة للمشروع</h2>
        <div class="objectives-grid">
            <div class="objective">
                <img src="site/images/Projets/JEA/Capacités_décisionnelles.jpg" alt="قدرات اتخاذ القرار">
                <p>مساعدة الشباب على استثمار قدراتهم لاتخاذ قرارات مناسبة في الوقت المناسب باستخدام الوسائل المتاحة من خلال الدورات التدريبية</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Pensée_entrepreneuriale.jpg" alt="التفكير الريادي">
                <p>تنمية التفكير الريادي لدى الشباب ودمجهم في سوق العمل</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Suivi_financier.jpg" alt="المتابعة المالية">
                <p>متابعة الشباب في مرحلة الدراسة المالية لمشاريعهم</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Compétences_créatives.jpg" alt="مهارات إبداعية">
                <p>تنمية المهارات الإبداعية والمبتكرة للتأثير بشكل فعال وإيجابي على المجتمع</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Éthique_travail.jpg" alt="أخلاقيات العمل">
                <p>غرس مبادئ وأخلاقيات العمل داخل المؤسسة من خلال الدورات والأنشطة المتعلقة بأخلاقيات العمل</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Moyens_communication.jpg" alt="وسائل الاتصال">
                <p>تزويد الشباب بوسائل التواصل والتأثير</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Esprit_d'entreprise.jpg" alt="روح ريادة الأعمال">
                <p>ترسيخ روح ريادة الأعمال لديهم</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/JEA/Esprit_optimiste.jpg" alt="روح التفاؤل">
                <p>بث روح التفاؤل والأمل في نفوس الشباب</p>
            </div>
        </div>
    </div>
    
    <div class="section">
        <hr>
        <p>حصل على أفضل الأفكار لمشروعك</p>
        <button onclick="window.location.href='/participation'">شارك الآن</button>
        <hr>
    </div>
    </div>
    



@endsection


