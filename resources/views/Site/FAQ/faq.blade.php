@extends('Site.layouts.main')

@section('container')

<link href="{{ asset('site/css/FAQ/faq.css') }}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="body mt-5 pt-5">
    <div class="container py-5 mt-2">
        <div class="faq-header">
            <h2>الأسئلة المتكررة: أسئلتكم، إجاباتنا</h2>
        </div>

        <div class="faq-item faq-card">
            <h2 class="faq-question">
                ماذا تفعل SHMaroc في إطار العمل الاجتماعي؟
            </h2>
            <div class="faq-answer">
                تدعم SHMaroc المجتمعات من خلال مشاريع التضامن، مثل توزيع المستلزمات خلال رمضان، وزيارات
                للأيتام ودور المسنين، والبعثات إلى المناطق المحرومة. كما يقدم مشروع عيد ملابس جديدة
                ولحوم خلال العيد. تُظهر هذه المبادرات التزام SHMaroc بالعمل الاجتماعي والمساعدة المتبادلة.
            </div>
        </div>

        <div class="faq-item faq-card">
            <h2 class="faq-question">
                ما هي البرامج التي تقدمها SHMaroc؟
            </h2>
            <div class="faq-answer">
                تقدم SHMaroc برامج متنوعة تركز على التعليم والصحة والتنمية المستدامة لدعم المجتمعات المحلية.
            </div>
        </div>

        <div class="faq-item faq-card">
            <h2 class="faq-question">
                كيف يمكنني أن أصبح عضوًا في SHMaroc؟
            </h2>
            <div class="faq-answer">
                لتصبح عضوًا، يمكنك التسجيل على موقعنا من خلال ملء استمارة العضوية.
            </div>
        </div>

        <div class="faq-item faq-card">
            <h2 class="faq-question">
                أين يمكنني العثور على مكاتب SHMaroc؟
            </h2>
            <div class="faq-answer">
                تقع مكاتب SHMaroc في الدار البيضاء. يمكنك العثور على العنوان الكامل على موقعنا.
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
 document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const isCollapsed = question.classList.contains('collapsed');

        document.querySelectorAll('.faq-question').forEach(q => {
            q.classList.add('collapsed');
        });
        document.querySelectorAll('.faq-answer').forEach(a => {
            a.style.display = 'none';
        });

        if (isCollapsed) {
            question.classList.remove('collapsed');
            question.nextElementSibling.style.display = 'block';
        }
    });
});
</script>

@endsection
