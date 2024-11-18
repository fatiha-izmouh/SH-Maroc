@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/Projets/ts.css') }}">
<script src="{{ asset('site/js/animation-all.js') }}"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<div class="my-5 py-5">
    
    <div class="section-intro">
        <h1>العمل الاجتماعي</h1>
        <div class="content">
            <p class="text">يهدف إلى تعزيز الأعمال الخيرية من خلال مساعدة المحتاجين، وخاصة الأرامل والأيتام، من خلال مبادرات إنسانية وتضامنية متنوعة</p>
            <div class="logo">
                <img src="site/images/Logos/travail-social_logo.png" alt="Logo">
            </div>
        </div>
    </div>
    
    <div class="objectives">
        <h2>الأهداف العامة للمشروع</h2>
        <div class="objectives-grid">
            <div class="objective">
                <img src="site/images/Projets/TS/Charité.jpg" alt="الأعمال الخيرية المستهدفة">
                <p>توجيه العمل الخيري نحو الأشخاص المستحقين، وخاصة الأرامل والأيتام والمرضى والمعاقين وذوي الاحتياجات الخاصة</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/TS/Travail_social.jpg" alt="العمل الاجتماعي">
                <p>توسيع قاعدة العمل الاجتماعي داخل المجتمع وزيادة قاعدة التبرعات</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/TS/Participation_citoyenne.jpg" alt="المشاركة المجتمعية">
                <p>إتاحة الفرصة للمواطنين للمشاركة في العمل الاجتماعي والإنساني</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/TS/Volontariat_jeunesse.jpg" alt="التطوع الشبابي">
                <p>تعميق فكرة التطوع والعمل الخيري لدى الأجيال الشابة</p>
            </div>
            <div class="objective">
                <img src="site/images/Projets/TS/Problèmes_sociétaux.jpg" alt="المشاكل الاجتماعية">
                <p>التعرف على مشكلات المجتمع وقضاياه المتعلقة بالجوانب الإنسانية</p>
            </div>
        </div>
    </div>
    
    <div class="results">
        <h2>الآليات</h2>
        <div class="results-grid">
            <div class="result">
                <i class="fas fa-hands-helping"></i>
                <p>مشروع رمضان قفة لتقديم الطعام للمحتاجين خلال شهر رمضان المبارك</p>
            </div>
            <div class="result">
                <i class="fas fa-truck"></i>
                <p>بعثات وقوافل تضامنية دورية في المناطق المحرومة</p>
            </div>
            <div class="result">
                <i class="fas fa-hand-holding-heart"></i>
                <p>تنظيم زيارات تضامنية إلى دور الأيتام ودور رعاية المسنين</p>
            </div>
            <div class="result">
                <i class="fas fa-gift"></i>
                <p>مشروع عيدين (إدخال الفرحة على المحتاجين من خلال تقديم أضاحي العيد واللحوم والملابس الجديدة)</p>
            </div>
        </div>
    </div>
    
    </div>
    
@endsection


