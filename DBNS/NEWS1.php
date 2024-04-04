<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index");

	if(!isset($v)){echo 'login first';exit;}
    exit;
}

?>


<header>
<ul class="nav">
  <li class="navele"><a  href="home.php">Home</a></li>
  <li class="navele"><a href="news.php">News</a></li>
  <li class="navele"><a href="register.php">login</a></li>
  <li class="navele" ><a href="\practice\loginform.php">cyber police login</a></li>
  <li class="navele" style="width: 50%;color: red;"><center><marquee behavior="" direction="left" width="90%">Cyber crime department</marquee></center></li>
 <li class="navele"><a href="welcome.php"><?php $v; $v=$_SESSION["username"]; echo htmlspecialchars($v); ?></li>
 <li class="img1" style="float:center;"><center><a href="welcome.php"><img style="height:40px;border-radius:20px" src="https://static.vecteezy.com/system/resources/previews/005/129/844/non_2x/profile-user-icon-isolated-on-white-background-eps10-free-vector.jpg" ></a></center></li>
</ul>

    <head>
          <link rel="stylesheet" href="nav.css">
    </head>
<body class="body">
</body>

<br>
    <div class="header-banner"><center>
        <h1 style="margin-top:70px; ">Cyber Crimes In India</h1></center>
    </div>
    <div class="clear"></div>
    <nav>
        <div class="site-title">HARYANA MOBILE CASE</div>
        <link rel="stylesheet" href="2.css">
    </nav>
</header>


<section class="content">
    <article>
        <h1 style="color: red;">HaryanaMobile Phone Cyber Attacks</h1>
        <p style="color: white;">About 28,000 mobile phone numbers being misused for committing cybercrimes have been identified and they will be blocked soon, a senior Haryana Police officer said on Thursday. The 27,824 phone numbers were identified through cybercrime helpline number 1930 and complaint portal cybercrime.gov.in, Additional Director General of Police (Crime) O P Singh said. The details of these numbers have been sent to the field units for getting them uploaded on the CyberSafe portal operated by the India Cyber Crime Coordination Centre under the Union home ministry in order to block them, the senior police officer said. Accoring to Singh, Gurugram (7,142), Faridabad (3,896), Panchkula (1,420), Sonipat (1,408), Rohtak (1,045), Hisar (1,228) and Ambala (1,101) were among the districts with the maximum number of mobile numbers used for committing cybercrimes. In a communication to all district nodal officers for cybercrimes, Singh urged them to upload mobile numbers being misused for committing cybercrimes on the CyberSafe portal. The field units have also been called upon “to carry out IMEI linkage analysis through the mobile handset being used to operate these numbers, find out other mobile numbers being used by the handset and upload these numbers on CyberSafe for their blocking by the Department of Telecommunications". Cumulatively, over 47,000 complaints of cybercrimes till September this year have been reported on helpline number 1930 and 29 cyber police stations, and 309 cyber desks in territorial police stations across the state. Police have also recovered and returned more than Rs. 15 crore of defrauded money to the victims, Singh said. October is being observed as National Cyber Security month, he said. To spread awareness about cybersecurity tips like recognising and reporting phishing, using strong passwords, keeping software updated, using multi-factor authentication and reporting cyber frauds and harassment, the Haryana Police has from October 1-25 organised 2,526 mass engagement programmes attracting 19.7 lakh people. Through social media, the Haryana Police reached out to another 26.7 lakh people, taking the total to 46.4 lakhs, which one out of five people living in the state, Singh said. "We are confident to cross the 50-lakh mark in the remaining four days. The resultant heightened awareness is finding reflection in increase in the number of per day reporting of cybercrime to 1930," Singh said.</p>
        <p class="p"><img src="2.jpg"></p>
        
    </article>


    <section class="content">
        <article>
            <h1 style="color: red;">Top Most crime happened in the indian states and cities</h1>
            <p style="color: white;">Do you know that India is in has been ranked the second position amongst the countries affected by cyber attacks between 2016-2018? According to a source, there was a 22% rise in cyber attack in India on IoT deployments. India has faced the most number of attacks in the IoT department this year. In fact, India has been consecutively facing cyber attacks, the second time in a row! 

                In a recent study, it was revealed that out of 15 Indian cities, Mumbai, New Delhi, and Bengaluru have faced the maximum number of cyber attacks. In the Annual Cyber Security Report by CISCO, 53% of cyber attacks caused more than $500K of financial loss to organizations in 2018. 
                
                India has faced a rise of 7.9% in data breaches since 2017. Also, the average cost per data breach record is mounting to INR 4,552 ($64). Cyber attacks in India have risen up to such an extent that our country ranks fourth out of the top 10 targeted countries in the world. In a report by India Today, Chennai experienced the highest percentile of cyber attacks with a stat of 48% in the first quarter of 2019.
                
                No survey or warning has brought any change in the cyber security policies of companies across the nation. In spite of witnessing several cyber attacks in India, people are still not aware of lucrative cyber security solutions to prevent their organization from any other attack. Here are some recent series of cyber attacks that massively brought loss to renowned companies in India.</p>
            <p class="p"><img src="cosmos.jpg"></p>
            
        </article>




        <article>
            <h1 style="color: red;">Hackers Attack Indian Healthcare Website, Steal 68 Lakh Records: Report</h1>
            <p style="color: white;">A US-based cybersecurity firm on Thursday said hackers stole 68 lakh records of patient and doctor information from a leading India-based healthcare website.

                According to IANS, the firm, FireEye, did not mention the website, but said Chinese cyber criminals were selling data stolen from healthcare organisations and web portals in “underground markets”. The data was stolen from many countries, including India, according to the report.
                
                The firm shared the report with IANS, which reported it as stating:
                
                “In February, a bad actor that goes by the name “fallensky519″ stole 6,800,000 records associated with an India-based healthcare website that contains patient information and personally identifiable information (PII), doctor information and PII and credentials.”
                
                FireEye observed multiple instances of healthcare-associated databases being sold on underground forums, sometimes for less than $2,000, between October 1, 2018 and March 31, 2019. The firm said “it continues to witness a concerted focus on acquiring healthcare research by multiple Chinese advanced persistent threat (APT) groups”.
                
                “In particular, it is likely that an area of unique interest is cancer-related research, reflective of China’s growing concern over increasing cancer and mortality rates, and the accompanying national health care costs,” the cybersecurity agency’s report says, according to IANS.
                
                Another probable motivation to steal the data is to sell it to China’s domestic pharmaceutical firms, a fast-growing sector in the country. This would benefit those firms which provide oncology treatments or services, the report says.</p>
            <p class="p"><img src="health.webp"></p>
            
        </article>



        <article>
            <h1 style="color: red;">Personal information of 100 million JustDial users on unprotected servers</h1>
            <p style="color: white;">JustDial — a digital version of old-school yellow-pages — had a rough time in April when an independent internet security researcher, Rajshekhar Rajaharia alerted the company to a potential data leak in their servers. The leak didn’t only affect people using the JustDial app or website, but anyone who had called the company’s helpline number between 2015 to 2019.

                Four application programme interfaces (APIs) were left unprotected leaving the names, contact details, and other personally identifiable information out in the open. One of the APIs could even allow hackers to trigger OPT request for any of registered phone numbers — it’s not so much a security issue but one of generating spam.
                
                According to the company, the vulnerability only existed in older versions of the JustDial app, which have since been fixed.</p>
            <p class="p"><img src="justdial.webp"></p>
            
        </article>


        <article>
            <h1 style="color: red;">Kudankulam Nuclear Power Plant (KKNPP) and ISRO hacked
            </h1>
            <p style="color: white;">India’s biggest nuclear power plant and the county’s apex space agency were hacked in September. Malware was installed on computers at the Kundankulam Nuclear Power Plant (KKNPP) and the Indian Space Research Organisation (ISRO) — and all it took was one click on the wrong type of link.

                The National Power Co-operation of India (NPCI) initially denied all reports of their systems being compromised before admitting that one of the computers may have been sabotaged. They added that the breach was restricted to the plant’s administrative network, which is separate from the operational network and system.
                
                ISRO was hacked right before the launch of Chandrayaan-2 — India’s second mission to the Moon, which ended with its lander crashing onto the lunar surface. But the agency told Quint that the malware did not affect any of their systems.
                
                According to Issue Makers Lab, a security research firm based in South Korea, both attacks were perpetrated by a group of North Korean hackers that go by the name Lazarus. They used software from the ‘DTrack’ malware family to hack into the system.
                
                According to the Observer Research Foundation (ORF), this act of cyber espionage might only a “prelude to something greater.”</p>
            <p class="p"><img src="nuclear.webp"></p>
            
        </article>


        <article>
            <h1 style="color: red;">OnePlus data breach affects 3,000 users</h1>
            <p style="color: white;">In November, OnePlus’ security discovered that some users’ data had been accessed by an unauthorised party. They were able to gain access to a user’s name, contact information and any orders they placed with OnePlus.

                This is the second breach in as many years. According to the company, all the hackers will be able to do is send out more spam. Even though OnePlus did not disclose how many users were affected, an investigation by CERT-In reported that less than 3,000 Indian customers were exposed.</p>
            <p class="p"><img src="oneplus.png"></p>
            
        </article>
</section> 
