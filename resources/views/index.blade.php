<!DOCTYPE html>
<html  dir="rtl">
<head>
    <link href="./image/title.png" rel="icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <title>Universities Directory</title>
</head>
<body>

    <header>
        <a href="#" class="logo">Universities Directory</a>
        <nav class="navigation">
            <a href="#services">نظرة عامة</a>
            <a href="#projects">الجامعات</a>
            <a href="#contact">من نحن</a>
        </nav>
    </header>


    <section class="main">
        <div>
            <h2><span>دليل الجامعات في الشمال السوري</span></h2>
            <h3> لسهولة الوصول ومعرفة الجامعات ومفاضلاتهم</h3>
        </div>
    </section>

    <section class="cards" id="services">

       

        <h2 class="title">تنقسم الجامعات:</h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa fa-university"></i>
                </div>
                <div class="info">
                    <h3>جامعات تتبع للحكومة التركية</h3>
                    <p>هم جامعات تركية مفتتحة في الداخل السوري ومعتمدة في تركيا والعالم ولهم تصنيف محلي ودولي</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-school"></i>
                </div>
                <div class="info">
                    <h3>جامعات تتبع للحكومة السورية المؤقتة</h3>
                    <p>هم جامعات موجودة في الداخل السوري و معتمدة من قبل المجلس التعليم العالي</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3>جامعات خاصة مرخصة من الحكومة السورية المؤقتة</h3>
                    <p> هم جامعات خاصة معتمدة من قبل المجلس التعليم العالي والحكومة السورية الموقتة</p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <h2 class="title">الجامعات</h2>
        
            <a href="/index/create" style="color: red">اضف موضوع جديد</a>
            


        <div class="content">

            @foreach ($lis as $item)
               
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ $item->image_path }}" />
                </div>
                <div class="project-info">
                    <p class="project-category"> تضم عدد من الكليَات والأقسام والمعاهد</p>
                    <i class="fa fa-university">{{ $item->place }}</i><br>
                    <i class="fas fa-crosshairs">{{ $item->gps }}</i> </i>
                    <strong class="project-title">
                        <span>لمعرفة تفاصيل المفاضلات</span>
                        <a href="https://drive.google.com/drive/folders/1oM6Ahvq1qCUOERkUYsXay-VDEMJqJDME?usp=sharing" class="more-details">اضغط هنا</a>
                    </strong>
                </div>
            </div>
            @endforeach
        </div>
            

    </section>

    <section class="cards contact" id="contact">
        <h2 class="title">معلومات عن المبرمج :</h2>
        <div class="content">

            <div class="card">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="info">
                    <h3></h3>
                    <p>مرحباً انا عمر مطور ويب يمكنني تقديم العديد من الخدمات في تصميم صفحات الويب والأمور البرمجية يمكنكم متابعتي عبر حساباتي الرسمية للإطلاع على أعمالي </p>
                    <div id="logo" class="pc-w-10 tb-w-08 ph-w-07">
                        
                        <p class="links">
                        
                            <a href="https://www.facebook.com/omer.o3man"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/omar_osman9"><i class="fab fa-instagram"></i></a>
                            <a href="https://wa.me/905528289028"><i class="fab fa-whatsapp"></i></a>
                            <a href=https://t.me/omar_o3man><i class="fab fa-telegram"></i></a>
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <p class="footer-title">Copyrights ®2022 <span>Omar Osman</span></p>
        
    </footer>

</body>
</html>
