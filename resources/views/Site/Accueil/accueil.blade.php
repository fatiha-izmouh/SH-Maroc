<!-- --------- ACCEUIL -------  -->
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SHMAROC </title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset('public\site\images\Logos\shmaroc.png')}}" type="image/png">

    <!-- CSS FILES  -->
    <link rel="stylesheet" href="{{ asset('site\css\Accueil\accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/Accueil/slider.css') }}">

    <link rel="stylesheet" href="{{ asset('site/css/responsive/media.css') }}">
    <script src="{{ asset('site/js/accueil.js') }}"></script>

    <!-- BOOSTRAP FILES  -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

     <!--  Animations  -->
     <script src="{{ asset('js/animation-all.js') }}"></script>



</head>


<body>

@extends('Site.layouts.main')


@section('container')

<div class="container-section">

    <!-- SLIDERR PART  -->

    <section class="home slider position-relative ">

        <!-- VIDEOS PART  -->
        <video class="video-slide activos" src="{{ asset('site/videos/shmaroc.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('site/videos/jea.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('site/videos/ts.mp4') }}" autoplay muted loop></video>
        <video class="video-slide" src="{{ asset('site/videos/cf.mp4') }}" autoplay muted loop></video>


        <!-- CONTENT PART  -->

        <div class="content activos col-xl-9 col-lg-10 col-md-12 col-12 mx-xl-auto w-xl-full d-flex">
            <h2>اكتشف تأثير <strong>Shmaroc</strong><br><span></span></h2>
            <p>شارك في مشاريع مبتكرة وساهم في مهمتنا لتعزيز الأفراد والمجتمعات. اكتشف كيف يمكنك أن تحدث الفرق مع Shmaroc.</p>
            <a href="{{ url('/qui-sommes-nous') }}" class="col-xl-3 col-6 text-center">المزيد من التفاصيل</a>
        </div>

        <div class="content col-xl-9 col-lg-10 col-md-12 col-12 mx-xl-auto w-xl-full d-flex">
            <h2>ألهم المستقبل: كن <strong>رائد أعمال شاب</strong><br><span></span></h2>
            <p>يهدف مشروع أكاديمية رواد الأعمال الشابة بالمغرب إلى تدريب الشباب ودعمهم لتحويل أفكارهم إلى مشاريع ملموسة، مع تشجيع روح الريادة لخلق فرص عمل جديدة.</p>
            <a href="/JEA" class="col-xl-3 col-6 text-center">استكشاف المشروع</a>
        </div>

        <div class="content col-xl-9 col-lg-10 col-md-12 col-12 mx-xl-auto w-xl-full d-flex">
            <h2><strong>معًا</strong> من أجل مستقبل أفضل <br><span></span></h2>
            <p>يكرس مشروع العمل الاجتماعي لدعم الأشخاص المحتاجين، وخاصة الأرامل والأيتام، من خلال مبادرات إنسانية وتضامنية.</p>
            <a href="/TS" class="col-xl-3 col-6 text-center">استكشاف المشروع</a>
        </div>

        <div class="content col-xl-9 col-lg-10 col-md-12 col-12 mx-xl-auto w-xl-full d-flex">
            <h2>عالم من الفرص للـ<strong>نساء</strong><br><span></span></h2>
            <p>يساعد مشروع مركز المرأة SHMAROC النساء على تطوير مهاراتهن والنمو الشخصي. يهدف البرنامج إلى مساعدتهن في التغلب على تحديات الحياة واكتشاف إمكانياتهن.</p>
            <a href="/CF" class="col-xl-3 col-6 text-center">استكشاف المشروع</a>
        </div>



       </div>

       <div class="slider-navigation ">
        <div class="nav-btn activos"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        </div>
    </section>

    <!---------------  NOS REALISATIONS   -------------->

    <div class="nos-realisations my-5">

        <!-- TITLEEEE -->
        <div class="general-title text-center mx-auto col-12 mb-5">
        <h2 class="mb-3">إنجازاتنا <span></span></h2>
        </div>

        <!-- 4card part -->
        <section class="container-lg">
            <div class="row">

                <!-- project infos -->

                <div class="project-infos col-xl-6 col-lg-12 col-md-12">
                    <h6 class="col-xl-12">جمعية صناع الحياة المغرب</h6>
                    <h4 class="col-xl-9 my-3"> العمل من أجل مستقبل أفضل منذ 2005</h4>
                    <p class="col-xl-10 my-3">منذ 2005، تساهم جمعية SHMAROC في التنمية الاجتماعية والثقافية في منطقة سوس ماسة والكبير أكادير، من خلال برامج تدريب الشباب، ودعم النساء، والمبادرات التضامنية.</p>
                    <button onclick="window.location.href='{{ url('/qui-sommes-nous') }}'" class="col-4 d-block mx-3 my-4">المزيد من التفاصيل</button>
                </div>

                <!-- project-divs -->
 
                <div class="project-divs col-xl-6 col-lg-12 col-md-12">
                    <div class="col-12 row my-2 mx-md-auto">
                        <div class="projectsd project-1 d-flex flex-column py-3 col-md-5 col-12 my-2 mx-3 text-center">
                            <p class="counter my-1" data-target="{{$data['beneficiaires']}}">+0</p>
                            <span class="my-1">المستفيدين</span>
                        </div>
                        <div class="projectsd project-1 d-flex flex-column py-3 col-md-5 col-12 my-2 mx-3 text-center">
                            <p class="counter my-1" data-target="{{$data['jeunes_formes']}}">+0</p>
                            <span class="my-1">الشباب المدربون</span>
                        </div>
                    </div>
                    <div class="col-12 row my-2 mx-md-auto">
                        <div class="projectsd project-1 d-flex flex-column py-3 col-md-5 col-12 my-2 mx-3 text-center">
                            <p class="counter my-1" data-target="{{$data['projets_realises']}}">+0</p>
                            <span class="my-1">المشاريع المنجزة</span>
                        </div>
                        <div class="projectsd project-1 d-flex flex-column py-3 col-md-5 col-12 my-2 mx-3 text-center">
                            <p class="counter my-1" data-target="{{$data['initiatives_sociales']}}">+0</p>
                            <span class="my-1">المبادرات الاجتماعية</span>
                        </div>
                    </div>
                </div>


            </div>
        </section>

        <!-- Notre Vision + Nos Objectifs + Notre Message Section  -->
        <div class="row">
            <div class="d-flex flex-column mt-4">
                <ul class="nav nav-tabs row container-lg mx-auto" id="myTab" role="tablist">

                    <li class="nav-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 col-6 py-2">
                        <a class="nav-link active py-4" id="presentation-tab" data-bs-toggle="tab" href="#presentation" role="tab" aria-controls="presentation" aria-selected="true"><i class="fa-solid fa-tv"></i> العرض</a>
                    </li>

                    <li class="nav-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 col-6 py-2">
                        <a class="nav-link py-4" id="vision-tab" data-bs-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false"><i class="fa-regular fa-lightbulb"></i> رؤيتنا</a>
                    </li>

                    <li class="nav-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 col-6 py-2 mb-3">
                        <a class="nav-link py-4" id="objectives-tab" data-bs-toggle="tab" href="#objectives" role="tab" aria-controls="objectives" aria-selected="false"><i class="fa-solid fa-bullseye"></i> أهدافنا</a>
                    </li>

                    <li class="nav-item col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 col-6 py-2 mb-3">
                        <a class="nav-link py-4" id="mission-tab" data-bs-toggle="tab" href="#mission" role="tab" aria-controls="mission" aria-selected="false"><i class="fa-solid fa-heart"></i> رسالتنا</a>
                    </li>

                </ul>
                <div class="row tab-content container-lg mx-auto my-3" id="myTabContent">
            <div class="tab-pane fade show active" id="presentation" role="tabpanel" aria-labelledby="presentation-tab">
                <p>تعمل جمعية SHMAROC على تعزيز التعاون بين الشباب والنساء لتعزيز التغيير الاجتماعي الإيجابي، عبر برامج ريادة الأعمال والتضامن الاجتماعي.</p>
            </div>
            <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab">
                <p>رؤيتنا هي بناء مجتمع قوي يتمتع بشباب متمكن ونساء ناجحات، قادرين على قيادة التغيير الإيجابي.</p>
            </div>
            <div class="tab-pane fade" id="objectives" role="tabpanel" aria-labelledby="objectives-tab">
                <p>تسعىSHMAROCروك إلى دعم المشاريع الاجتماعية، تعزيز ريادة الأعمال، وتمكين المرأة لتحسين الظروف المعيشية للأفراد.</p>
            </div>
            <div class="tab-pane fade" id="mission" role="tabpanel" aria-labelledby="mission-tab">
                <p>مهمتنا هي توفير الفرص للشباب والنساء ليكونوا فاعلين في مجتمعهم، من خلال التعليم، التدريب، والمشاريع الاجتماعية.</p>
            </div>
        </div>
    </div>
        </div>




    </div>


    <!---------------  NOS PROJETS   -------------->

    <div class="nos-projets my-5">

    <!-- TITLEEEE -->
    <div class="general-title text-center mx-auto col-12 pd-4 pt-5">
    <h2 class="mb-3"> <span>مشاريعنا</span></h2>
    </div>

    <section class="container-lg">
        <div class="row">

            <div class="project-card  col-xl-4  text-center">
                <h3 style="color:#01499D;">JEA-Maroc</h3>
                <img src="{{ asset('site/images/Logos/jea-maroc_logo.jpg') }}" alt="JEA-Maroc_Logo">
                <p>يعتمد على مبدأ تدريب ودعم الشباب ذوي الأفكار لمساعدتهم على تنفيذ مشاريعهم، وتعزيز الفكر الريادي بين الشباب لخلق وظائف جديدة.</p>
                <a href="{{ url('/JEA') }}" class="btn btn-custom btn-jea-maroc">اكتشف</a>
            </div>

            <div class="project-card  col-xl-4  text-center">
            <h3 style="color:#a127c0;">مركز المرأة</h3>
            <img src="{{ asset('site/images/Logos/centre-femme_logo.png') }}" alt="Centre-Femme_Logo">
                <p>يهدف إلى تأهيل النساء في مجالات متنوعة لتطوير مهاراتهن وتمكينهن من مواجهة تحديات الحياة، وزيادة ثقتهن بأنفسهن، وتعزيز استقلالهن.</p>
                <a href="{{ url('/CF') }}" class="btn btn-custom btn-centre-femme">اكتشف</a>
            </div>

            <div class="project-card  col-xl-4  text-center">
            <h3 style="color:#126256;">العمل الاجتماعي</h3>
            <img src="{{ asset('site/images/Logos/travail-social_logo.png') }}" alt="Travail-Social_Logo">
            <p>يهدف إلى تعزيز الأعمال الخيرية من خلال مساعدة الأشخاص المحتاجين، بما في ذلك الأرامل والأيتام، من خلال مبادرات إنسانية تضامنية لدعم هذه المجتمعات الضعيفة.</p>
            <a href="{{ url('/TS') }}" class="btn btn-custom btn-travail-social">اكتشف</a>
            </div>
        </div>
    </section>
    </div>


    <!---------------  NOS Actualités   -------------->

    <div class="nos-actualites my-5">

    <!-- TITLEEEE -->
    <div class="general-title text-center mx-auto col-12 pb-4 pt-5">
    <h2 class="mb-3"> <span>أخبارنا</span></h2>
    </div>

    <!--  -->
    <section class="container-lg">
        <div class="mb-4 d-flex align-items-center overflow-hidden">
            <button class="btn slide-left rounded-circle text-light" style="background-color:#126256;">&lt;</button>
            <div class="cards-container overflow-hidden w-100">
                <div class="d-flex text-center cards">
                    @foreach($actualites as $actualite)
                        <a href="{{ route('actualite.show', $actualite->id) }}" class="card position-relative mx-3 stretched-link text-decoration-none">
                            <img src="{{ asset('storage/'.$actualite->image) }}" class="rounded" alt="{{ $actualite->title }}">
                            <div class="card-title position-absolute text-center">
                                <h5><strong>{{ $actualite->title }}</strong></h5>
                                <div class="card-date"><i class="bi bi-calendar3"></i> {{ $actualite->date->translatedFormat('d F Y') }}</div>
                                <div class="card-lieu"><i class="bi bi-geo-alt"></i> {{ $actualite->adresse }}</div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
            <button class="btn slide-right rounded-circle text-light" style="background-color:#126256;">&gt;</button>
        </div>
    </section>
    </div>

    <!---------------  NOS Partenaires   -------------->
    <div class="nos-partenaires my-5">

    <!-- TITLEEEE -->
    <div class="general-title text-center mx-auto col-12 pb-4 pt-5">
    <h2> <span>شركائنا</span></h2>
    </div>

    <section class="container-lg">
    <div class="slider-container">
        <div class="image-list d-flex flex-wrap justify-content-center" id="imageList">
            @forelse($logos as $logo)
                <div class="image-item col-xl-2 col-lg-2 col-md-3 col-4 my-3">
                    <img 
                        src="{{ asset('storage/' . $logo) }}" 
                        alt="Logo du partenaire"
                        style="width: 100%; height: auto; object-fit: contain; border: 1px solid #ddd; border-radius: 8px; padding: 5px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                </div>
            @empty
                <p class="text-center" style="font-size: 1.2rem">لا يوجد أي شعار لشريك حاليًا.</p>
            @endforelse
        </div>
    </div>
</section>


    </div>

</div>


<!-- SCRIPT FILES -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<!-- ANIMATIONS -->

<script src="https://unpkg.com/scrollreveal"></script>

</script>
</body>


</html>

@endsection
