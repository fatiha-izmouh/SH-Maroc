@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/Projets/cf.css') }}">

 <!--  Animations  -->
 {{-- <script src="{{ asset('site/js/animation-all.js') }}"></script> --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="py-5 my-5">
    
    <div class="section-intro">
        <h1>مركز المرأة للتنمية الشخصية</h1>
        <div class="content">
            <p class="text">مركز النساء لإعادة التأهيل الذاتي هو مشروع للتنمية والتدريب قائم على مبدأ تدريب النساء في مختلف المجالات، من خلال الدورات والورشات والتدريبات، من أجل إعادة تأهيل النساء، حيث أنهن النواة التي يقوم عليها المجتمع، وإذا صلحن صلح المجتمع</p>
            <div class="logo">
                <img src="site/images/Logos/centre-femme_logo.png" alt="Logo" >
            </div>
        </div>
    </div>
    
    <div class="objectives">
        <h2>الأهداف العامة للمشروع</h2>
        <div class="objectives-grid">
            <div class="objective">
                <img src="site/images/Projets/CF/Compétences_personnelles.jpg" alt="المهارات الشخصية">
                <p>تطوير المهارات الشخصية للنساء</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/CF/Niveau_psychologique.jpg" alt="المستوى النفسي">
                <p>تطوير المستوى النفسي للنساء</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/CF/Empowerment_collectif.jpg" alt="التمكين الجماعي">
                <p>تحضير مجموعة من النساء القادرات على مواجهة التحديات الحديثة وإبراز قدراتهن</p>
            </div>
        </div>
    </div>
    
    <div class="results">
        <h2>النتائج المرجوة من المشروع</h2>
        <div class="results-grid">
            <div class="result">
                <i class="fas fa-users"></i>
                <p>حل المشاكل الأسرية</p>
            </div>
            <div class="result">
                <i class="fas fa-heart"></i>
                <p>الحد من ظاهرة الطلاق</p>
            </div>
            <div class="result">
                <i class="fas fa-fist-raised"></i>
                <p>مكافحة جميع أشكال العنف والظلم ضد النساء</p>
            </div>
            <div class="result">
                <i class="fas fa-balance-scale"></i>
                <p>تقديم استشارات قانونية وشرعية واجتماعية</p>
            </div>
            <div class="result">
                <i class="fas fa-bullhorn"></i>
                <p>توعية النساء بحقوقهن وواجباتهن تجاه الأسرة والمجتمع</p>
            </div>
            <div class="result">
                <i class="fas fa-lightbulb"></i>
                <p>إعادة تأهيل النساء وتطوير قدراتهن</p>
            </div>
            <div class="result">
                <i class="fas fa-home"></i>
                <p>المساهمة في الحفاظ على الأسرة وحمايتها من التفكك</p>
            </div>
            <div class="result">
                <i class="fas fa-briefcase"></i>
                <p>تشجيع الابتكار وريادة الأعمال النسائية لإبراز قدراتهن الإبداعية</p>
            </div>
        </div>
    </div>
    
    </div>
    
@endsection


