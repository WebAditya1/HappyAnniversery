<?php 

  session_start();
  if(!isset($_SESSION["valid"]) || $_SESSION["valid"] !== true) {
    header("Location: login.php");
    exit;
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Happy Three Years of Togetherness</title>
</head>
<body>
  <div class="colored-container">
    <div class="swiper-container verticle-animation">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/0_Front_Page.jpg')">
              </div>
            </div>

            <div class="content-box special">
              <div class="starting" data-swiper-parallax="-400">
                  It was you<br>It was me<br>It was the silence<br>Underneath the stars<br>That understood<br>My heartbeat<br>And it's racing<br>You told me nothing<br>I believed everything<br>In that moment<br>I found life<br>In that moment<br>I found you...
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/1_8th_August_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Aug 08, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                After walking from Vibrant to Hostel and the 4 pm meeting at the Bus Stop, we finally were on a trip to Garadia Mahadev. This was one of the most memorable days in my life . The day, I held your hands for the first time. The day when we spent 3 hours together just walking, talking and searching for the water in the waterfalls.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/2_7th_September_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Sep 07, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Party Time , Sajal’s Birthday , The day we went for two consecutive movies , “THE NUN” and “STREE” followed by Hookah and lunch in Troika Lounge. The day was even more memorable when you said “YES”. I still remember that moment of how pleased I was. I LOVE YOU
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/3_10th_September_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Sep 10, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Okay , so now we are in a relationship , We talked the whole night and we planned to meet in IL . At 6o’clock in the morning, we were roaming in IL and then we met in a place and hugged each other so tight . We locked our lips and just got mesmerized in each other’s eyes.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/4_17th_September_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Sep 17, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                The eager, the anxiety of hugging you again was just not in control. Just one week later, we planned to meet again in IL ( same place, same timing ) but love expanded. Seeing each other again and again in the classes and still not able to express the affection towards each other made this day more memorable.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/5_10th_October_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;10, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Moving on our trip to Chambal Gardens , roaming around the entire park with hands held tight , sharing few things and most importantly promising each other to never leave the other person alone. PROMISES are NEVER broken.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/6_17th_October_2018.png')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;17, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                U met my friends , now it was time for me to meet your friends (Raj , Kratik and Sejal). Starting our day from Indra Vihar to Ganesh Udyan Temple and Park , we enjoyed a lot . The madness and the vibe created by them was such a pleasant experience. Remember the ride we sat together?
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/7_27th_October_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp; 27, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Hiring a Scooty and going for a ride was so much fun. So we 4 went to INOX to watch the movie “BAZAAR” but we didn’t stop there . So we went to Gaipernath and literally I messed up everything . The day I ended up crying in the arms of Sajal but the feeling of jealousy increased my love towards you, JAAN.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/8_31st_October_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;31, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Fare - ye - well ! It's Very difficult to bid goodbye to someone who was so close to me for more than 1.5 years . The last trip with SAJAL to go cart was not only a memorable experience but also quite emotional (Very difficult to explain in words).
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/9_31st_October_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;31, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                The day was already filled with such beautiful memories . Adding a pinch of salt to it , visiting the mosque to seek the blessings of GOD and the sunset view was so pleasing.<br>(P.s - I still remember the bandage on your leg)
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/0_Front_Page.jpg')">
                <video width="100%" 
                  src="assets/images/10_31_October.mp4" 
                  autoplay loop muted playsinline autobuffer
                  preload="auto" type="video/mp4"></video>  
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct 31, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Swings , go karting , OLA ride all are incomplete without the smile on your face . At times, I'm myself astonished to what extent our love has grown. Till date, whenever I look at you, it feels like I'm seeing you for the first time, when I hold your hand, it feels like I'm standing fast amidst a flood where everything else is drowning in chaos.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/11_18th_November_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 18, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Hiring a scooty and driving all along Kota was just so exhilarating . The ride to Gaipernath with me just hugging you from behind and smelling your hair was so fascinating. The sunset view , the monkeys , the stairs , the temple , the waterfall and the time we spent there can never be forgotten.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/12_18th_November_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 18, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                There is no stopping when we are on a roll . So we drove to Garadia Mahadev the same day , and what more beautiful than to enjoy the wind blowing your hair on my face . Holding hands in front of GOD to once again promise each other.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/13_20th_November.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 20, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Time - 9:30 AM<br>Morning Show - Badhai Ho<br>Place - PVR<br>My eyes were only on you and no word can describe that day. Each moment spent with you seems like a blessing
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/14_25th_November_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 25, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Remember this day ?? We were out to eat something and ended up again at our favourite place SQUARE 36 RESTAURANT . But we didn’t stop there, we then went to the coast of Kishore Sagar opposite the Seven Wonders.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/15_25_November_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 25, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Reaching there , we were so excited for boating. They gave us a life jacket and we went to the boat holding each other’s hands throwing drops of water at each other and reached the temple at the middle of the river. We held hands , we kissed and just looked into each other looking all around KOTA.
              </div>
              </div>
            </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/16.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 29, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Who can stop us ?? Lets go to WaterPark. The enjoyment we did there was just enchanting . It's November , who cares ? Time to jump off some water rides and enjoy the best time with you MY LOVE
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/17_29th_November_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 29, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Remember the FORT ?? Outside City , No problem ! Looking at couples and laughing and finding them in terrible spots was just the highlight of the day . But the best part , dancing around the entire Fort with my eyes set upon you and your T-shirt saying “STOP LOOKING AT ME”.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/18_29_Nov_2018.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 29, 2018
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Booking an OLA for the entire day and visiting different places like the FORT , WATER PARK , KOTA CITY , SQUARE 36 . That day , that damn day is one of the best days in my entire KOTA life. I LOVE YOU JAAN
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/19_1st_January_2019.png')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Jan 01, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Who says Long Distance doesn’t work. My birthday Texts,Calls all delayed me to video call you. Finally , it's time and what A surprise . Just seeing someone cutting a cake for me on video call brought tears to my eyes and I was speechless.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/20_27th_October_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;27, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                A long wait comes to an end , Seeing someone so close after 6 months is enough to bring a smile on someone’s face and spending an entire day with her is just the best anyone can wish for . Thank You Srashti For Everything
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/21_31st_October_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Oct &nbsp;31, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                A long wait for a trip but finally we are off to Bhatinda Waterfalls. I am still upset about the fact that I don’t know how to drive a bike . Waterfalls , Slippery rocks all around with Sonty falling in front of us . I love you babe, a little more than yesterday, a lot less than tomorrow. And then the lunch at Seventeen Degrees with me just unconsciously hugging you was the highlight of the day.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/22_1_November_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Nov 01, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                When we are around , there has to be a plan . Time for some adventurous one , this time we head over to my Pragati Restaurant . We ate, we chatted and this time , I drove the scooty . So how do i Drive Now ?
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/23_28th_December_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Dec 28, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                A wait comes to end when the train finally arrives at Dhanbad Station . What a moment it is to just look at that smile at 6 AM in the morning. Head directly to the plan , meeting Harsh after a long time with you at the Seventeen Degrees . How can I forget that tight hug of yours?
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/24_29th_December_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Dec 29, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Who can stop us when we are on a roll , driving straight to the highway to FarmHouse and then to Barbeque . Be mine forever Jaan . I will never ever let me miss that beautiful smile of yours. That day is still in my mind . You hugging me and falling unconscious makes me speechless every time.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/25_30th_December_2019.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Dec 30, 2019
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Birds chirping, winds blowing and your presence made this as one of the best sunday mornings of my life. That scooty ride of yours and the hairs blowing over me just reminded me of our first journey together.
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/26_1st_January_2020.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Jan 01, 2020
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Wasn’t expecting this at all , A jacket , a bouquet of flowers and many more surprises . Celebrating my Birthday in Seventeen Degrees , the smile on your face was just the best gift ever . The dance we did was the cream on the cake . But still I am angry that why didn’t you stop Harsh,Vyom and Pratham when they were belting me !!
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/0_Front_Page.jpg')">
                <video width="100%" 
                  src="assets/images/27_1st_April_2020.mp4" 
                  autoplay loop muted autobuffer playsinline
                  preload="auto"></video>
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Apr 01, 2020
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                Happy 19th Birthday my love , Your emergence into the universe caused the stars to dim just for a moment. Your beauty outshines the rest, and I love you. You have always been the woman for me. Thank You For Everything Srashti
              </div>
            </div>
          </div>
        </div>
        
        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/0_Front_Page.jpg')">
                <video 
                  width="100%" 
                  src="assets/images/28_7th_September_2020.mp4" 
                  autoplay loop muted autobuffer playsinline
                  preload="auto"></video>
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Sep 07, 2020
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                To be in love with you is a prestige for me. You have made my life heaven by accepting my proposal and becoming my girlfriend. Being with me is not easy, but you stayed in my life for two years without any complaint and regret. I Love You!
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/29.jpg')">
              </div>
            </div>

            <div class="content-box">
              <div class="title" data-swiper-parallax="-300">
                Present &nbsp;Day
              </div>

              <div class="subtitle" data-swiper-parallax="-200">
                No matter how high, I would climb a thousand mountains, no matter the amount of miles, I would walk them, no matter the ocean, I would swim across it, no matter what type of surface, I would crawl a thousand yards, all to see your smile. The biggest reward of my day is seeing the smile on your face when you see me. I LOVE YOU JAAN
              </div>
            </div>
          </div>
        </div>

        <div class="swiper-slide">
          <div class="slidebox">
            <div class="flex-left">
              <div class="bordered-img"
                style="background-image: url('assets/images/30.jpg')">
              </div>
            </div>

            <div class="content-box special">
              <div class="ending" data-swiper-parallax="-400">
                <p>And finally</p>
                <h2>Happy Birthday</h2>
                <p>
                  So...Umm…Ain't got words enough to thank you, not just for this, but for everything, basically just for existing. On this day was born one beautiful Princess, and fortunately she fell in love with me and made me feel like the luckiest guy in the world. So I will do everything for her majesty. Happy birthday, my princess!!! You're the best thing that ever happened to me. I love you ... To the bits and beyond. Thanks for always being there JAAN !!!
                </p>
                <h4>( Forever yours )</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    var swiperverticle = new Swiper('.swiper-container.verticle-animation', {
      speed: 1200,
      parallax: true,
      // autoplay: {
      //   delay: 1400,
      //   disableOnInteraction: false
      // },
      direction: 'vertical',
      mousewheel: true,

      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>