<?php
function __($str)
{
$lang="en";
if (!empty($_GET['lang'])) $lang=$_GET['lang'];
$words= array ("Navid Milanizadeh"=>"نوید میلانی زاده"
                ,"I'm"=>"من"
                ,"Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer"=>"برنامه نویس"
                ,"Contact Me"=>"با من تماس بگیر"
                ,"The process of understanding and solving the problem is the most important part of a problem that forms the beginning of an innovation production cycle. This is my potential." => "فرآیند درک و حل مساله مهمترین قسمت تحلیل یک مشکل است که شروع یک چرخه تولید نوآوری را شکل می دهد. این توانایی بالقوه من است."
                ,"Being familiar with any programming language and technology will help you find the best way to achieve your goal and use all of them at the right time."=>"اینکه از هر زبان برنامه نویسی و تکنولوژی اطلاع داشته باشی کمک می کند بهترین راه را برای رسیدن به هدف پیدا کنی و از تمام آنها به موقع استفاده کنی"
                ,"Develop Mobile Apps in the form of Native or Web or Hybrid according to the needs of the project is of great importance for mobile and is one of the tools for designing and producing these tools."=>"طراحی برنامه های موبایل چه به صورت Native یا Web یا Hybrid با توجه به نیاز پروژه امروزه از اهمیت بسزایی برخوردار شده اند و یکی از توانایی های من طراحی و تولید اینگونه ابزارهاست"
                ,"Software Development Life Cycle is the application of standard business practices to building software applications. It’s typically divided into six to eight steps: Planning, Requirements, Design, Build, Document, Test, Deploy, Maintain. Some project managers will combine, split, or omit steps, depending on the project’s scope. "=>"چرخه حیات توسعه نرم افزار به کارگیری شیوه های تجاری استاندارد برای ساخت برنامه های نرم افزاری است. معمولاً به شش تا هشت مرحله تقسیم می شود: برنامه ریزی، الزامات، طراحی، ساخت، سند، آزمایش، استقرار، نگهداری. برخی از مدیران پروژه بسته به محدوده پروژه، مراحل را ترکیب، تقسیم یا حذف می کنند."
                ,"Software department manager and senior developer"=>"مدیر بخش نرم افزار و توسعه دهنده ارشد"
                ,"Production of the first meter and estimation software in Foxpro programming language and then upgrading it to Windows with VB6 and then upgrading it with .net technology and rewriting it with C# language and developing 15 specialized civil engineering software packages, custom software development"=>"تولید اولین نرم افزار متره و برآورد به زبان برنامه نویسی Foxpro و سپس ارتقا آن به تحت ویندوز با VB6 و سپس ارتقا با تکنولوژی .net و باز نویسی با زبان C# و توسعه 15 پکیج نرم افزار تخصصی عمران ، توسعه نرم افزارهای سفارشی"
                ,"Chairman of the Board"=>"رئیس هیات مدیره"
                ,"Working Experience"=>"تجربه کاری"
                ,"My Resume"=>"رزومه"
                ,"MilanAfzar Computer Co."=>"شرکت رایانه ای میلان افزار"
                ,"Baravord Journal"=>"مجله برآورد"
                ,"Executive director and literary editor"=>"مدیر اجرایی و ویرایشگر ادبی"
                ,"Editing and selection of articles and technical expert"=>"ویرایش و گزینش مقالات و کارشناس فنی"
                ,"Management of the author group of the Estimating magazine for three years, as well as preparation of 5 articles in the specialized field of cost estimation and project costing methods, as well as literary editing of articles and selection and page layout of the magazine."=>"مدیریت گروه مولف نشریه برآورد برای سه سال و همچنین تهیه 5 مقاله در زمینه تخصصی برآورد هزینه و روش های هزینه یابی پروژه همچنین ویرایش ادبی مقالات و گزینش و صفحه آرایی مجله"
                ,"Aluvista Co."=>"ویستا صنعت پارت"
                ,"IT Manager"=>"مدیر IT"
                ,"IT manager and technology consultant"=>"مدیر IT و مشاور فن آوری"
                ,"Design of customer management system and production management system based on ISO, Kaizen implementation and website design"=>"طراحی سیستم مدیریت مشتری و سیستم مدیریت تولید بر پایه iso ، پیاده سازی کایزن و طراحی وب سایت "
                ,"Develop and code small and big programs"=>"توسعه و کد نویسی برنامه های کوچک و بزرگ"
                ,"Carrying out more than 80 successful projects, the first rank of the Pars Coders website for 5 consecutive years, two-digit and three-digit ranking for consecutive years, excellent feedback from employers and their satisfaction."=>"انجام بیش از 80 پروژه موفق ، رتبه اول سایت پارس کدرز برای 5 سال متوالی ، رتبه دو رقمی و سه رقمی برای سالیان متوالی ، بازخورد عالی کارفرمایان و رضایت آنها"
                ,"Their work is very good and they are experts. They solved our problem quickly. They are also very fair. I hope they are always successful."=>"کار ایشون بسیار خوبه و متخصص هستند. مشکل ما رو به سرعت حل کردند . بسیار منصف هم هستند. امیدوارم همیشه موفق باشند."
                ,"For three years, I struggled with the system that I promised to Mr. Nevedi to develop, and I requested a Farsi (Jalali) calendar from the distribution company, but he told me that the whole system should be changed from scratch and gave me a price that I paid for everything and then I got help from every programmer on this issue, all of them without exception cannot be said to be impossible or not within our knowledge and.... But Mr. Navidi did it with the lowest cost and all the changes in the system were done in the same way, which I really enjoyed. To make a module, I think you don't need a special flow chart, you just tell us what you want and after presenting the system, you will make a small stroke!!! Because they do the work so cleanly that you can't believe it, I used to slap myself a few times at the beginning and then I would believe it!!!!!! I enjoyed hanging out with them and I am very happy that there are people like them in the web world. And I say: for carrying out my project beyond my own wishes, whenever I come to the north of the country, I am at their service, may God bless them and their ilk."=>"من سه سال با سيستمي که براي توسعه به آقاي نويدي دادم سرو کله زدم و از شرکت توزيع کننده درخواست تقويم فارسي (جلالي) کردم اما بهم گفت کل سيستم بايد از پايه تغيير کتد و قيمتي داد که من کلا قيد همه چيز رو زدم و بعد از اين موضوع از هر برنامه نويسي کمک گرفتم همه بدون استثنا گفته نميشه محاله يا در دانش ما نيست و .... ولي آقاي نويدي با کمترين هزينه اين کار رو کرد و تمامي تغييرات سيستم هم جوري انجام شد که واقعاً نهايت لذت بردم در ضمن براي ساخت يه ماژول فکر کنم نياز به فلوچارت خاص هم نداريد شما خواسته هاتون رو بگيد و بعد از ارائه سيستم تقربباً يه سکته ريز ميزنيد !!! بخاطر اينکه اينفدر کار رو تميز انجام ميدن که باورتون نميشه من خودم اوايل يه چند تا سيلي به خودم ميزدم بعد باور ميشد!!!!!! بنده نهايت لذت رو از معاشرت با ايشون بردم و بسيار خوشحالم که افرادي مثل ايشون در دنيا وب هستن بنده قبلاً خدمتشون عرض کردم و از همين تريبون هم استفاده ميکنم!! و ميگم: بخاطر انجام پروژه بنده فراتر از خواسته هاي خودم هر وقت شمال کشور اومدن بنده هستم در خدمتوشون انشالله خداوند سايه ايشون و امثال ايشون رو ا"
                ,"He did something for me that several programmers either said was not in my power and knowledge or was impossible! The project was more complicated than the name of the other web services, but they not only managed it well, but by receiving a more than fair amount, they handed over this work to me in a clean and perfect way. Some of his characteristics that caught my attention: responsibility - trying to do the job in the best possible way - friendly - without a bit of pride - extremely high knowledge in various fields - experienced - strong support - just Time and providing guidance even beyond the prescribed amount. I hope that if I have another project in the future, they will be honored to cooperate."=>"ايشان کاري را براي بنده انجام دادند که چندين برنامه نويس يا گفتند در توان و دانشم نيست يا محال است! پروژه نسبت به بقيه وب سرويس ها پيچيده تر از اسمش بود ولي ايشان نه تنها به خوبي از پسش برآمدند بلکه با دريافت مبلغي فراتر از منصفانه اين کار را به شکلي تميز و بي نقص تحويل بنده دادند. چند مشخصه از ايشان که توجه بنده را جلب کرد: مسئوليت پذيري - سعي در انجام کار به بهترين شکل از بهترين راه ممکن - خوش برخورد - بدون ذره اي غرور - دانش فوق العاده بالا در زمينه ها مختلف - با تجربه - پشتيباني قوي - صرف وقت و ارائه ي راهنمايي حتي فراتر از مبلغ مقرر . اميدوارم در آينده اگر پروژه ي ديگري داشتم ايشان افتخار همکاري بدهند."
                ,""=>""
                ,""=>""
                ,""=>""
                ,""=>""
                ,""=>""                
            );
if ($lang =='fa')
{
    if (!empty($words[$str]))    
        return $words[$str];
    else
        return $str;
}
else
    return $str;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Navid Milanizdeh - نوید میلانی زاده</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="نوید میلانی زاده;Navid Milanizdeh;navid;milanizadeh;" name="keywords">
        <meta content="Personal Page of Navid Milanizadeh" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="51">
        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-light navbar-light">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand"><?=__('Navid Milanizadeh')?></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#service" class="nav-item nav-link">Service</a>
                        <a href="#experience" class="nav-item nav-link">Experience</a>
                        <!--a href="#portfolio" class="nav-item nav-link">Portfolio</a-->
                        <!--a href="#price" class="nav-item nav-link">Price</a-->
                        <a href="#review" class="nav-item nav-link">Review</a>
                        <!--a href="#team" class="nav-item nav-link">Team</a-->
                        <!--a href="#blog" class="nav-item nav-link">Blog</a-->
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


        <!-- Hero Start -->
        <div class="hero" id="home">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-6">
                        <div class="hero-content">
                            <div class="hero-text">
                                <p><?=__("I'm Navid Milanizadeh")?></p>
                                <p><?=__("B.S.  Computer Engineering")?></p><p style="margin-top:-20px;" ><small><?=__("1379-1384")?></small></p>                                
                                <p><?=__("Master degree   Artificial Intelligence(AI)")?></p><p style="margin-top:-20px;"><small><?=__("1395-1398")?></small></p>                                
                                <h2></h2>
                                <div class="typed-text">BackEnd Developer, Full Stack Developer, Web Designer, Web Developer, Front End Developer, Apps Designer, Apps Developer, Package Designer, Life cycle Manager , Analyzer</div>                                
                            </div>
                            <div class="hero-btn">
                                <a class="btn" href="https://wa.me/+989121722991"><?=__("Hire Me")?></a>
                                <a class="btn" href="#contact"><?=__("Contact Me")?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 d-none d-md-block">
                        <div class="hero-image">
                            <img src="img/hero.png" alt="Hero Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->


        <!-- About Start -->
        <div class="about wow fadeInUp" data-wow-delay="0.1s" id="about">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header text-left">
                                <p><?=__("Learn About Me")?></p>
                                <h2><?=__("20 Years Experience")?></h2>
                            </div>
                            <div class="about-text">
                                <p>
                                <?=__ ("programmer,developer with 20+ years of experience.")?>    
                                <?=__ ("Developed and maintained 100+ applications and Web App's using Microsoft and other client languages.")?>
                                </p>
                            </div>
                            <div class="skills">
                                <div class="skill-name">
                                    <p><?=__("PHP")?></p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("JAVA")?></p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("Python")?></p><p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("C# & VB.Net")?></p><p>85%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("PHP Frameworks and CMS Packages(Laravel,PHPCake,Wordpress,Dropal,Joomla,..)")?></p><p>95%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("VB6 & Foxpro")?></p><p>100%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="skill-name">
                                    <p><?=__("Socket & API")?></p><p>90%</p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <a class="btn" href="#service"><?=__("Learn More")?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Service Start -->
        <div class="service" id="service">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p><?=__("What I do")?></p>
                    <h2><?=__("Awesome Quality Services")?></h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div class="service-text">
                                <h3><?=__("Problem Solving")?></h3>
                                <p>
                                    <?=__("The process of understanding and solving the problem is the most important part of a problem that forms the beginning of an innovation production cycle. This is my potential.")?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fa fa-laptop-code"></i>
                            </div>
                            <div class="service-text">
                                <h3><?=__("Full Stack Developing")?></h3>
                                <p>
                                    <?=__("Being familiar with any programming language and technology will help you find the best way to achieve your goal and use all of them at the right time.")?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-android"></i>
                            </div>
                            <div class="service-text">
                                <h3><?=__("Apps Development")?></h3>
                                <p>
                                    <?=__("Develop Mobile Apps in the form of Native or Web or Hybrid according to the needs of the project is of great importance for mobile and is one of the tools for designing and producing these tools.")?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="fab fa-angellist"></i>
                            </div>
                            <div class="service-text">
                                <h3><?=__("SDLC")?></h3>
                                <p>
                                    <?=__("Software Development Life Cycle is the application of standard business practices to building software applications. It’s typically divided into six to eight steps: Planning, Requirements, Design, Build, Document, Test, Deploy, Maintain. Some project managers will combine, split, or omit steps, depending on the project’s scope. ")?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
                
         <!-- Experience Start -->
        <div class="experience" id="experience">
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p><?=__("My Resume")?></p>
                    <h2><?=__("Working Experience")?></h2>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><?=__("MilanAfzar Computer Co.")?></div>
                            <h2><?=__("Chairman of the Board")?></h2>
                            <h4><?=__("Software department manager and senior developer")?></h4>
                            <p>
                                <?=__("Production of the first meter and estimation software in Foxpro programming language and then upgrading it to Windows with VB6 and then upgrading it with .net technology and rewriting it with C# language and developing 15 specialized civil engineering software packages, custom software development")?>
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><?=__("Baravord Journal")?></div>
                            <h2><?=__("Executive director and literary editor")?></h2>
                            <h4><?=__("Editing and selection of articles and technical expert")?></h4>
                            <p>
                                <?=__("Management of the author group of the Estimating magazine for three years, as well as preparation of 5 articles in the specialized field of cost estimation and project costing methods, as well as literary editing of articles and selection and page layout of the magazine.")?>
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><?=__("Aluvista Co.")?></div>
                            <h2><?=__("IT Manager")?></h2>
                            <h4><?=__("IT manager and technology consultant")?></h4>
                            <p>
                                <?=__("Design of customer management system and production management system based on ISO, Kaizen implementation and website design")?>
                            </p>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><?=__("FreeLancer")?></div>
                            <h2><?=__("Free Programming")?></h2>
                            <h4><?=__("Develop and code small and big programs")?></h4>
                            <p>
                                <?=__("Carrying out more than 80 successful projects, the first rank of the Pars Coders website for 5 consecutive years, two-digit and three-digit ranking for consecutive years, excellent feedback from employers and their satisfaction.")?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Experience End -->
        
        
        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s" style="display:none;">
            <div class="container">
                <div class="section-header text-center">
                    <p>Reasonable Price</p>
                    <h2>Get A <span>Special</span> Price</h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Pricing Plan</a>
                </div>
            </div>
        </div>
        <!-- Banner End -->


        <!-- Portfolio Start -->
        <div class="portfolio" id="portfolio"  style="display:none;">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Portfolio</p>
                    <h2>My Excellent Portfolio</h2>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul id="portfolio-filter">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-1">Web Design</li>
                            <li data-filter=".filter-2">Mobile Apps</li>
                            <li data-filter=".filter-3">Game Dev</li>
                        </ul>
                    </div>
                </div>
                <div class="row portfolio-container">
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-1.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>eCommerce Website</h3>
                                <a class="btn" href="img/portfolio-1.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-2.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Product Landing Page</h3>
                                <a class="btn" href="img/portfolio-2.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-3.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript quiz game</h3>
                                <a class="btn" href="img/portfolio-3.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-4.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>JavaScript drawing</h3>
                                <a class="btn" href="img/portfolio-4.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-5.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Social Mobile Apps</h3>
                                <a class="btn" href="img/portfolio-5.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 portfolio-item filter-3 wow fadeInUp" data-wow-delay="1s">
                        <div class="portfolio-wrap">
                            <div class="portfolio-img">
                                <img src="img/portfolio-6.jpg" alt="Image">
                            </div>
                            <div class="portfolio-text">
                                <h3>Company Website</h3>
                                <a class="btn" href="img/portfolio-6.jpg" data-lightbox="portfolio">+</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio End -->
        
        
        <!-- Banner Start -->
        <div class="banner wow zoomIn" data-wow-delay="0.1s"  style="display:none;">
            <div class="container">
                <div class="section-header text-center">
                    <p>Awesome Discount</p>
                    <h2>Get <span>30%</span> Discount</h2>
                </div>
                <div class="container banner-text">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. 
                    </p>
                    <a class="btn">Order Now</a>
                </div>
            </div>
        </div>
        <!-- Banner End -->
        
        
        <!-- Price Start -->
        <div class="price" id="price"  style="display:none;">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>Pricing Plan</p>
                    <h2>Affordable Price</h2>
                </div>
                <div class="row">
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Basic</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>49<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Standard</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>99<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="price-item">
                            <div class="price-header">
                                <div class="price-title">
                                    <h2>Premium</h2>
                                </div>
                                <div class="price-prices">
                                    <h2><small>$</small>149<span>/ mo</span></h2>
                                </div>
                            </div>
                            <div class="price-body">
                                <div class="price-description">
                                    <ul>
                                        <li>Bootstrap 4</li>
                                        <li>Font Awesome 5</li>
                                        <li>Responsive Design</li>
                                        <li>Browser Compatibility</li>
                                        <li>Easy To Use</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="price-footer">
                                <div class="price-action">
                                    <a class="btn" href="">Order Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Price End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial wow fadeInUp" data-wow-delay="0.1s" id="review">
            <div class="container">
                <div class="testimonial-icon">
                    <i class="fa fa-quote-left"></i>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/person1.jpeg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                <?=__("Their work is very good and they are experts. They solved our problem quickly. They are also very fair. I hope they are always successful.")?>
                            </p>
                            <h3>Reza64</h3>
                            <h4>Belitkade.ir</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/person2.jpg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                               <?=__("For three years, I struggled with the system that I promised to Mr. Nevedi to develop, and I requested a Farsi (Jalali) calendar from the distribution company, but he told me that the whole system should be changed from scratch and gave me a price that I paid for everything and then I got help from every programmer on this issue, all of them without exception cannot be said to be impossible or not within our knowledge and.... But Mr. Navidi did it with the lowest cost and all the changes in the system were done in the same way, which I really enjoyed. To make a module, I think you don't need a special flow chart, you just tell us what you want and after presenting the system, you will make a small stroke!!! Because they do the work so cleanly that you can't believe it, I used to slap myself a few times at the beginning and then I would believe it!!!!!! I enjoyed hanging out with them and I am very happy that there are people like them in the web world. And I say: for carrying out my project beyond my own wishes, whenever I come to the north of the country, I am at their service, may God bless them and their ilk.")?>
                            </p>
                            <h3>MisterBR</h3>
                            <h4>Shamsi.ir</h4>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-img">
                            <img src="img/person3.jpeg" alt="Image">
                        </div>
                        <div class="testimonial-text">
                            <p>
                                <?=__("He did something for me that several programmers either said was not in my power and knowledge or was impossible! The project was more complicated than the name of the other web services, but they not only managed it well, but by receiving a more than fair amount, they handed over this work to me in a clean and perfect way. Some of his characteristics that caught my attention: responsibility - trying to do the job in the best possible way - friendly - without a bit of pride - extremely high knowledge in various fields - experienced - strong support - just Time and providing guidance even beyond the prescribed amount. I hope that if I have another project in the future, they will be honored to cooperate.")?>
                            </p>
                            <h3>Saman0098</h3>
                            <h4>Directi</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Team Start -->
        <div class="team" id="team" style="display:none;">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>My Team</p>
                    <h2>Expert Team Members</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.0s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-1.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Mollie Ross</h2>
                                <h4>Web Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-2.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Dylan Adams</h2>
                                <h4>Web Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-3.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Jennifer Page</h2>
                                <h4>Apps Designer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="img/team-4.jpg" alt="Image">
                            </div>
                            <div class="team-text">
                                <h2>Josh Dunn</h2>
                                <h4>Apps Developer</h4>
                                <p>
                                    Lorem ipsum dolor sit amet consec adipis elit. Etiam accum lacus
                                </p>
                                <div class="team-social">
                                    <a class="btn" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn" href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Contact Start -->
        <div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="contact-form">
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" id="sendMessageButton">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Blog Start -->
        <div class="blog" id="blog" style="display:none">
            <div class="container">
                <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                    <p>From Blog</p>
                    <h2>Latest Articles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.1s">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Web Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>5</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.3s">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" alt="Blog">
                            </div>
                            <div class="blog-text">
                                <h2>Lorem ipsum dolor sit amet</h2>
                                <div class="blog-meta">
                                    <p><i class="far fa-user"></i>Admin</p>
                                    <p><i class="far fa-list-alt"></i>Apps Design</p>
                                    <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                                    <p><i class="far fa-comments"></i>10</p>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet elit. Nullam commodo mattis mi. Nullam eu erat lectus. Proin viverra risus vitae luctus. Proin ut ante, vitae sapien. Fusce sem ac erat rhoncus, ornare mattis nisl massa et eros vitae pulvin
                                </p>
                                <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="footer wow fadeIn" data-wow-delay="0.3s">
            <div class="container-fluid">
                <div class="container">
                    <div class="footer-info">
                        <h2><?=__("Navid Milanizadeh")?></h2>
                        <h3><?=__("No 35 - Fakouri Blv - Mashhad - Iran")?></h3>
                        <div class="footer-menu">
                            <p>+98 912 172 2991</p>
                            <p>sytous@gmail.com</p>
                        </div>
                        <div class="footer-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="container copyright">
                    <p>&copy; <a href="sytous.github.io">Navid Milanizadeh </a>, All Right Reserved </p>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        
        <!-- Back to top button -->
        <a href="#" class="btn back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/typed/typed.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
