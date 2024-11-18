@extends('Site.layouts.main')

@section('container')

<link rel="stylesheet" href="{{ asset('site/css/participation.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

<div class="body mt-5 py-3">
    <div class="container mt-5 py-5">

        <div class="title text-center mb-4">
            استمارة المشاركة
        </div>

        <div class="containeo">

            <div class="logo_jea row justify-content-center mb-4">
                <img src="site/images/Logos/jea.png" alt="شعار JEAMAROC" class="img-fluid">
            </div>

            <form action="{{ route('participations.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group-inline mb-4">
                    <div class="form-group">
                        <label for="nom_complet">الاسم الكامل :</label>
                        <input type="text" id="nom_complet" name="nom_complet" placeholder="الاسم الكامل" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date_naissance">تاريخ الميلاد :</label>
                        <input type="date" id="date_naissance" name="date_naissance" class="form-control" required>
                    </div>
                </div>

                <div class="form-group-inline mb-4">
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني :</label>
                        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" class="form-control" required pattern="^[a-zA-Z0-9._%+-]+@gmail\.com$">
                    </div>
                    <div class="form-group">
                        <label for="telephone">رقم الهاتف :</label>
                        <input type="tel" id="telephone" name="telephone" placeholder="رقم الهاتف" class="form-control" required>
                    </div>
                </div>

                <div class="form-group-inline mb-4">
                    <div class="form-group">
                        <label for="ville">المدينة :</label>
                        <input type="text" id="ville" name="ville" placeholder="المدينة" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="specialite">التخصص :</label>
                        <input type="text" id="specialite" name="specialite" placeholder="التخصص" class="form-control" required>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="domaine_projet">إلى أي مجال تنتمي فكرة مشروعك (أو شركتك)؟</label>
                    <input type="text" id="domaine_projet" name="domaine_projet" placeholder="مجال الفكرة" class="form-control" required>
                </div>

                <div class="form-group mb-4">
                    <h6>الوضع المهني :</h6>
                    <div class="d-flex flex-column">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situation_professionnelle" id="situation1" value="خريج جديد" required>
                            <label class="form-check-label" for="situation1">
                                خريج جديد
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situation_professionnelle" id="situation2" value="موظف أو عامل">
                            <label class="form-check-label" for="situation2">
                                موظف أو عامل
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="situation_professionnelle" id="situation3" value="صاحب شركة">
                            <label class="form-check-label" for="situation3">
                                صاحب شركة
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <h6>كم من الوقت كانت لديك فكرة (أو الشركة)؟</h6>
                    <div class="d-flex flex-column">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duree_idee" id="duree_idee1" value="أقل من سنة" required>
                            <label class="form-check-label" for="duree_idee1">
                                أقل من سنة
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duree_idee" id="duree_idee2" value="من سنة إلى ثلاث سنوات">
                            <label class="form-check-label" for="duree_idee2">
                                من سنة إلى ثلاث سنوات
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="duree_idee" id="duree_idee3" value="أكثر من ثلاث سنوات">
                            <label class="form-check-label" for="duree_idee3">
                                أكثر من ثلاث سنوات
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <label for="objectif">ما هو هدفك من الانضمام إلى JEA-MAROC؟</label>
                    <textarea name="objectif" id="objectif" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="attentes">ما هي توقعاتك من JEA-MAROC؟</label>
                    <textarea name="attentes" id="attentes" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group mb-4">
                    <label for="formation_description">هل سبق لك أن استفدت من تدريب في بناء وإدارة شركة؟ إذا نعم، صف بإيجاز.</label>
                    <textarea name="formation_description" id="formation_description" class="form-control" rows="5" required></textarea>
                </div>

                <div class="form-group">
                    <h6>قيم مستوى ثقتك في نجاح مشروعك :</h6>
                    <div class="d-flex flex-column">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="confiance_projet" id="confiance1" value="مقتنع بالنجاح" required>
                            <label class="form-check-label" for="confiance1">
                                مقتنع بالنجاح
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="confiance_projet" id="confiance2" value="واثق باعتدال">
                            <label class="form-check-label" for="confiance2">
                                واثق باعتدال
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="confiance_projet" id="confiance3" value="مرتاب">
                            <label class="form-check-label" for="confiance3">
                                مرتاب
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <h6>هل يمكنك الالتزام بالبرنامج؟</h6>
                    <p>هل يمكنك الالتزام بالحضور وتخصيص وقت كافٍ للدراسة وتطوير مشروعك؟</p>
                    <div class="d-flex flex-column">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="engagement_programme" id="engagement1" value="نعم" required>
                            <label class="form-check-label" for="engagement1">
                                نعم
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="engagement_programme" id="engagement2" value="ربما">
                            <label class="form-check-label" for="engagement2">
                                ربما
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="engagement_programme" id="engagement3" value="لا">
                            <label class="form-check-label" for="engagement3">
                                لا
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4">
                    <div class="conditions form-check">
                        <input class="form-check-input" type="checkbox" id="conditions" name="conditions" required>
                        <label class="form-check-label" for="conditions">
                            أوافق على <a href="/conditions-utilisation" target="_blank">شروط الاستخدام</a>.
                        </label>
                    </div>
                </div>

                <div class="button-group">
                    <button type="submit">إرسال</button>
                </div>

            </form>

        </div>


        <div class="social-media d-flex flex-column align-items-center mt-5">
            <h3>تابعونا على:</h3>
            <div class="social-icons d-flex justify-content-center mt-3">
                <a href="https://www.instagram.com/jeamaroc" class="mx-3" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="https://wa.me/212618151929" class="mx-3" target="_blank"><i class="fab fa-whatsapp fa-2x"></i></a>
                <a href="https://web.facebook.com/jeamaroc" class="mx-3" target="_blank"><i class="fab fa-facebook-f fa-2x"></i></a>
                <a href="https://www.youtube.com/jeamaroc" class="mx-3" target="_blank"><i class="fab fa-youtube fa-2x"></i></a>
            </div>
        </div>

        

        <div class="videos mt-2">
            <div class="video-embed embed-responsive embed-responsive-16by9 text-center">
                <iframe src="https://www.youtube.com/embed/kZ52EVDTw34?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif
    });
</script>

@endsection
