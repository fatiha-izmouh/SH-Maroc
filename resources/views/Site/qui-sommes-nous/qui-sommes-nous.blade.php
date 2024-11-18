@extends('Site.layouts.main')

@section('container')

<!-- CSS FILES -->
<link rel="stylesheet" href="site/css/qui-sommes-nous/qui-sommes-nous.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">


<div class="mt-5">
<div class="section-all">
  <div class="container-xl-fluid px-4 my-4">

    <!-- Part 01  -->
    <div class="row my-5">
      <!-- sommes desc  -->
      <div class="sommes-desc my-5 col-xl-6 col-lg-12 col-12 ">
      <h2 class="sommes-title col-12">من نحن</h2>
      <p class="sommes-p col-12">نحن جمعية تنمية اجتماعية وثقافية مستقلة عن الهيئات السياسية والنقابية. هدفنا هو المساهمة في تحقيق التنمية المستدامة وتكوين جيل جديد من الشباب الذين يلعبون دورًا مؤثرًا وفعالًا في تطوير المجتمع، المتميز بالأمل، التعاون والمبادرات الإيجابية.</p>
      </div>

      <!-- sommes-video -->
      <div class="sommes-video my-3 col-xl-6 col-lg-12 col-12">
        <iframe class="col-12" src="https://www.youtube.com/embed/sgJ42weZXKo?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>



    </div>

    <!-- Part 02 [Notre Vision]  -->
    <div class="row my-5">
      <!-- Vision Title -->
      <div class="vision-title text-center mx-auto col-12">
      <h2 class="mb-3">رؤيتنا <span>الأفق</span></h2>
      <p>نهج شامل وداعم للتقدم</p>
      </div>

      <!-- Vision Paragraphs  -->
      <div class="visions-ps my-4">
      <div class="vision-p-1 visions py-3 col-12 card my-4 px-3">
            <div class="v-bg"></div>
              <h5 class="fw-bold"><i class="fa-solid fa-ring mx-2"></i>مشاركة الشباب في مشاريع مفيدة اجتماعيًا</h5>
              <p class="mx-md-5 mx-0 py-2">نحن نشجع الشباب بنشاط على المشاركة في المبادرات التي تفيد المجتمع المغربي، مما يعزز شعورهم بالمسؤولية المدنية وقدرتهم على إحداث تغيير إيجابي.</p>
          </div>
          <div class="vision-p-2 visions py-3 col-12 card my-4 px-3">
              <h5 class="fw-bold"><i class="fa-brands fa-connectdevelop mx-2"></i>تطوير المهارات والابتكار من أجل المستقبل</h5>
              <p class="mx-md-5 mx-0 py-2">نركز على تطوير المهارات والابتكار لدى الشباب، مما يعدهم لمواجهة التحديات القادمة. تهدف هذه المقاربة إلى تمكين الشباب المغربي من المساهمة بشكل فعال في حل مشكلات المستقبل.</p>
          </div>
          <div class="vision-p-3 visions py-3 col-12 card my-4 px-3">
              <h5 class="fw-bold"><i class="fa-solid fa-tree mx-2"></i>التوعية البيئية والتعاون</h5>
              <p class="mx-md-5 mx-0 py-2">نحن نروج لزيادة الوعي البيئي ونشجع التعاون بين الشباب لحماية كوكبنا والحفاظ عليه. من خلال المبادرات التعليمية والمجتمعية، نلهم الشباب لتبني ممارسات مستدامة والعمل معًا من أجل مستقبل أكثر اخضرارًا وصحة.</p>
          </div>
      </div>
    </div>

    <!-- Part 03 [Ce qu'ils disent de nous] -->
    <div class="row my-5 sommes-all">
        <div class="vision-title text-center mx-auto col-12">
        <h2 class="mb-3">ماذا يقولون عنا؟ <span>آراء</span></h2>
        <p>اكتشفوا شهادات ملهمة من الذين عايشوا التزامنا وخبرتنا.</p>
        </div>

        <!-- Slider Opinion Part -->
        <div class="povs row swiper-container">
            <div class="swiper-wrapper">
                @foreach ($commentaires as $commentaire)
                    <div class="swiper-slide pov-1 pov col-md-5 card p-5 mx-2">
                        <div class="pov-title d-flex">
                            <div class="avatar">
                                {{ strtoupper(substr($commentaire->nom, 0, 1)) }}{{ strtoupper(substr($commentaire->prenom, 0, 1)) }}
                            </div>
                            <div class="pov-title-desc">
                                <h6>{{ $commentaire->nom }} {{ $commentaire->prenom }}</h6>
                            </div>
                        </div>
                        <div class="pov-desc col-xl-9 col-lg-10 col-12 my-2">
                            {{ $commentaire->opinion }}
                        </div>
                        <div class="stars">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fa-solid fa-star {{ $i < $commentaire->rating ? 'yellow' : '' }}"></i>
                            @endfor
                        </div>
                    </div>
                @endforeach
            <!-- Add more swiper slides as needed -->
            </div>

            <!-- Swiper Navigation -->
            <div class="swiper-navigation">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>


    <div class="row my-5 comments">

    <div class="vision-title text-center mx-auto col-12">
    <h2 class="mb-3">أضف <span>تعليقًا</span></h2>
    <p>شارك تجربتك وساعدنا في التحسن من خلال ملاحظاتك القيمة</p>
    </div>

    <div class="container feedback-form">
      <form action="{{ route('commentaires.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-row row">
        <div class="form-group col-md-6 col-12 my-2 py-2 nom">
                <label for="nom" class="py-2">الاسم : </label>
                <input type="text" class="form-control" id="nom" name="nom" placeholder="أدخل اسمك" required>
            </div>
            <div class="form-group col-md-6 col-12 my-2 py-2">
                <label for="prenom" class="py-2">اللقب :</label>
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="أدخل لقبك" required>
            </div>
        </div>
       
        <div class="form-group">
            <label for="email" class="my-2 py-2">البريد الإلكتروني :</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="أدخل بريدك الإلكتروني" required>
        </div>
        <div class="form-group">
            <label for="opinion"  class="my-2 py-2">الرأي :</label>
            <textarea class="form-control" id="opinion" rows="4" name="opinion" placeholder="أدخل رأيك" required></textarea>
        </div>


        <div class="form-group text-center">
        <label for="starRating" class="my-2 py-2">قيمنا : </label>
        <div class="star-rating">
                <input type="radio" id="star1" name="rating" value="5">
                <label for="star1" class="fa fa-star"></label>
                <input type="radio" id="star2" name="rating" value="4">
                <label for="star2" class="fa fa-star"></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3" class="fa fa-star"></label>
                <input type="radio" id="star4" name="rating" value="2">
                <label for="star4" class="fa fa-star"></label>
                <input type="radio" id="star5" name="rating" value="1">
                <label for="star5" class="fa fa-star"></label>
            </div>
        </div>
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary comment-btn py-2 col-lg-2 col-md-4 col-8 my-4">أضف</button>
        </div>
    </form>
    </div>


    </div>


  </div>
</div>
</div>

<!-- Slider Script -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
  const swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    });
</script>

<!-- Custom CSS for Navigation Arrows -->
<style>
  .swiper-navigation {
    position: relative;
    text-align: center;
    margin-top: 15px;
    padding: 20px ;
  }
  .swiper-button-prev, .swiper-button-next {
    position: relative;
    display: inline-block;
    margin: 0 20px;
    color: #000;
  }


</style>

@endsection
