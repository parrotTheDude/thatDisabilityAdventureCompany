<?php
  // Import the Postmark Client Class:
  require_once('./vendor/autoload.php');
  require_once('inc/variables.php');
  require_once('inc/db-connect.php');

  db_connect();

  use Postmark\PostmarkClient;
  use Postmark\Models\PostmarkAttachment;

  $postmarkToken = POSTMARK_TOKEN;
  $emailsSent = false;

  // THIS WORKS BUT NEEDS TO BE FUNCTIONAL. FOR NOW JUST SENDS EMAILS TO PREDEFINED LIST.

  $client = new PostmarkClient($postmarkToken);
  $batchEmail = array(
    "Aabdi@IgniteHealthCare.com.au", "ajpjcox@gmail.com", "aleyshahammond@outlook.com", "alicia220711@hotmail.com",
    "Aliciarosekilic@gmail.com", "allanna.pipicelli@hotmail.com", "Alliedhealth@superbia.net.au", "alysha-hall@hotmail.com",
    "amily31@yahoo.com.au", "ammy@disabilitysupportlink.com.au", "andersoneryn@gmail.com", "anita@dcvic.com.au",
    "annette.redpath@ymail.com", "ashfordnikolaidis@gmail.com", "ashlea.cuffe@national360.com.au", "asrandsar@gmail.com",
    "authorcindycollins@mail.com", "baciroz@gmail.com", "bc6617436@gmail.com", "bdickeson@dodo.com.au",
    "ben.carter.work44@gmail.com", "berto12@bigpond.com", "bgnotty@bigpond.com", "Bill9099@gmail.com",
    "billsholer@gmail.com", "bjandkr88@outlook.com", "blakebuchananriley@icloud.com", "blakemrudy@gmail.com",
    "brenton.poupos@gmail.com", "bridieg@bigpond.com", "brittlamb@gmail.com", "Bromaxx211@gmail.com",
    "brookeferroni@yahoo.com", "brookegizas@hotmail.com", "brooket@aots.com.au", "brownlily254@gmail.com",
    "bryanmurray678@gmail.com", "ca-matthews@hotmail.com", "caitlin.agra@live.com.au", "camerongrantnash@gmail.com",
    "camlamb2001@icloud.com", "carlathomson928@gmail.com", "carolynjhenry@hotmail.com", "cassiem@libertydisabilityservices.com.au",
    "cazscammell70@gmail.com", "ccook@cameronwellnesscentre.com", "cdileo.44@gmail.com", "charlottefarano@gmail.com",
    "cherylees@wayss.org.au", "chloe@thedollerfamily.net", "christie.maloney@gmail.com", "cjan007@gmail.com", "cjcooke01@outlook.com", "clairenuttall77@yahoo.com", "cobrien@cameronwellnesscentre.com.au", "cody@tdacvic.com", "codyfishertherapies@gmail.com", "Communicate_it@optusnet.com.au", "cori.kinnaird@gmail.com", "Cowgirl1353@gmail.com", "crazyblackcat12@gmail.com", "crystalsaunders_@hotmail.com",
    "Cybil_71@live.com", "dmaciulaitis@hotmail.com", "daniel.burke41@gmail.com", "danielle.millership@hotmail.com",
    "dannielle.smith1997@hotmail.com", "darren.cheryl@yahoo.com.au", "dclough@mentisassist.org.au", "debbie.wray@monash.edu",
    "debbiehill0408@gmail.com", "delsheedy@gmail.com", "dgriff274@gmail.com", "dlmurphy15@hotmail.com",
    "dude3535@yahoo.com", "ekdavey82@gmail.com", "elianahplant51@gmail.com", "Elijahmclean2002@gmail.com",
    "Elise@enablekidspt.com.au", "elizajromano@gmail.com", "Elysia_g@hotmail.com", "em@nepeancentre.com.au",
    "emma@kangarookids.net.au", "emmahands@optusnet.com.au", "everywhere_07@hotmail.com", "Ewadenaz@gmail.com",
    "fairygodmother2@bigpond.com", "Fordkate@hotmail.com", "freya.rixon@gmail.com", "g.vt@bigpond.com",
    "gallowaysam@live.com", "geemar95@outlook.com", "georgia.hutton85@gmail.com", "Gevans@incluso.com.au",
    "giacobbesam@icloud.com", "glennjc@dcsi.net.au", "gnotman57@gmail.com", "gogallopin@yahoo.com",
    "grace.macaa@gmail.com", "graham@milescivildesign.com.au", "greg@unitypowersystems.com", "grossekalluswko9l2+84han5v3aioo@gmail.com", "haleymagri@gmail.com", "heathdarcy54@gmail.com",
    "heatherhazeldene1@gmail.com", "Hello@Inclusiveminds.com.au", "HLovell@wellways.org", "Hope.Calvert@each.com.au",
    "hybrid2204@gmail.com", "imjacquelyn@duck.com", "imweir1987@gmail.com", "indigobetts@outlook.com",
    "info@acceptds.com.au", "info@emoteot.com.au", "info@sanguinecrew.com", "Info@sunnydc.net",
    "intakesc@gladyandco.com.au", "ioannidisandcondie@hotmail.com", "isaiah@tdacvic.com", "jachew@qec.org.au",
    "jack_tobin03@hotmail.com", "jaipitkin@gmail.com", "jamee_delosa@live.com.au", "janice@parentingjourneysot.com.au",
    "jasminehirschfeld40@gmail.com", "Jayejaye@me.com", "jcatania810@gmail.com", "jed.pinkerton50@gmail.com",
    "jenna-lygreen@outlook.com", "jennifer.dennis.1994@gmail.com", "jennifer23051991@gmail.com", "jh5199550@gmail.com",
    "jnnigreen@live.com.au", "joannebaxter66@gmail.com", "joelandcheriebrown@bigpond.com", "jominett.makeadifference@yahoo.com",
    "jordanvdm@hotmail.com.au", "jsbodl@bigpond.com", "Julie2233@bigpond.com", "k8efarmer@gmail.com",
    "Kat.forrest@sebadesign.com", "Katherine@supportyourway.com.au", "Kayden.crombie@gmail.com", "Kbartlett3@bigpond.com",
    "Kcupido@abilityaustralia.com.au", "keaneryan744@gmail.com", "kelsey@lemansgokarts.com.au", "kelsie@dcvic.com.au",
    "kennedy.66@icloud.com", "kerryn.d@cassidycrew.com.au", "khaila.m.1998@gmail.com", "kiri_b0t@hotmail.com", "chong.chong0520@hotmail.com", "Koogre12@gmail.com",
    "kylie.wilson@live.com", "kyliepaterson2010@gmail.com", "l.smith101@hotmail.com", "lackers3@bigpond.com",
    "Laura@wesupportu.com.au", "ldickeson@dodo.com.au", "lee-ann@100milefoodie.com.au", "libbydutton20@yahoo.com",
    "lioangplinh@gmail.com", "lisha_louise007@outlook.com", "littleonepam@yahoo.com.au", "llynnehirschfeld@outlook.com",
    "lynette.sparkles@hotmail.com", "lynette@mybuddygard.com.au", "m_assetta03@hotmail.com", "M0rgantheMus007@gmail.com",
    "magikdaver31@gmail.com", "magpie.land@hotmail.com", "Margi.Jelovcic@mindaustralia.org.au", "marilaralaghou@gmail.com",
    "mark.tender@hotmail.com", "markandbelle@bigpond.com.au", "mary.jane.riddiford@gmail.com", "mattholmes1199@gmail.com",
    "maxx1970@live.com.au", "mbendell73@gmail.com", "Megan@each.com.au", "melissa.m.j@hotmail.com",
    "melissavella77@gmail.com", "mercurytrent@outlook.com", "miggiking@gmail.com", "millysmith03@gmail.com",
    "miniq.05@gmail.com", "ml.norris@bigpond.com", "mollybferguson@yahoo.com", "moniquededios@gmail.com",
    "mrsdee.hill@yahoo.com", "ms151515@gmail.com", "mtloft@bigpond.com", "murf2580@gmail.com",
    "Mykhailamccraw@gmail.com", "natalieoviss@outlook.com", "natbell.86@icloud.com", "nicholasadammcclure@gmail.com",
    "nicholastolsma3@gmail.com", "Nyturner78@gmail.com", "paperangel7@hotmail.com", "parrien@hotmail.com", "paul.bo.li@gmail.com", "paul.size@adrenability.com.au",
    "pireremokopunas13@gmail.com", "priscilla08@bigpond.com", "quickvac@bigpond.com.au", "quiesto@netspace.net.au",
    "rachelcarmenwalker@gmail.com", "raelenekelly.1966@gmail.com", "ramonajaye1996@hotmail.com", "Rhys@glowingtherapy.com.au",
    "richbiss7@gmail.com", "rikkismart77@gmail.com", "robinwalker1986@outlook.com", "robwill7@bigpond.net.au",
    "rod.plant.maint@gmail.com", "ruby@tdacvic.com", "sallyrobertson24@gmail.com", "samanthagillespiesamg@hotmail.com",
    "samanthasingh181@gmail.com", "sambora74@gmail.com", "sammi@genesisddss.com.au", "sammiepollard@icloud.com",
    "sandrahaynes@imaginetherapeuticservices.com.au", "sapphirelaghou@gmail.com", "Sarah.knight@live.com.au", "sarah.s@encompasshouse.org.au",
    "Sc.empowerabilityhub@gmail.com", "schoolnorris79@gmail.com", "Schwebba17@outlook.com", "Sdzodzadinov@gmail.com",
    "sebastian.langkamer@gmail.com", "sgouldlouise@hotmail.com", "shadowfiree@hotmail.com", "Shanae.14@outlook.com",
    "Shanaya.wolf@hotmail.com", "shanestirling51@gmail.com", "shannaracannell@hotmail.com", "sheree_rogers@hotmail.com",
    "sheree.hobson90@gmail.com", "siobhan@wecoach.com.au", "skinnsythelegend@gmail.com", "slyarman@hotmail.com",
    "smileaudrey1@gmail.com", "sophie.pinfold88@gmail.com", "strickey@wellways.org", "strongmark16@gmail.com",
    "swainy@dcsi.net.au", "Tahlianna@hotmail.com", "talia@emble.com.au", "talisewickham@gmail.com", "Tamara.barson6@gmail.com", "tamscooke@yahoo.com",
    "tannerdeb@gmail.com", "tannerlauren496@gmail.com", "tanya@gippysc.com.au", "tanyawines06@gmail.com",
    "tayla.m.smith93@hotmail.com", "thongpkk@gmail.com", "tigergarden@proton.me", "tombaker2004@gmail.com",
    "towinanoscar@gmail.com", "traceyrawson@hotmail.com", "traveler.89@hotmail.com", "twb2014@gmail.com",
    "tweetymist@hotmail.com", "tylerbrauer004@outlook.com", "udanarabel20@gmail.com", "v.bebbington@optusnet.com.au",
    "vicrelationshipmanager@cocoons.com.au", "walkerdaniel931@gmail.com", "wayne.bentham@avenuesaustralia.com",
    "will@tdacvic.com", "winifred.soleyholt@gmail.com", "wombat@dcsi.net.au", "wutan@westnet.com.au",
    "yakini15@hotmail.com", "zeusmclain22@gmail.com"
);
  $templateId = 38858643;
  $fromEmail = FROM_EMAIL;
  $tag = "jan-25-newsletter";
  $trackOpens = true;
  $trackLinks = "None";
  $messageStream = "broadcast"; 

  $url = "https://thatdisabilityadventurecompany.com.au";

  for ($i = 0; $i < sizeof($batchEmail); $i++) {
    try {
      // Sends the emails to the contact and the company
      if (filter_var($batchEmail[$i], FILTER_VALIDATE_EMAIL)) {
        $toEmail = $batchEmail[$i];

        // Send an email to client to confirm:
        $sendResult = $client->sendEmailWithTemplate(
          $fromEmail,
          $toEmail,
          $templateId,
          ["product_url" => $url],
          true, // Inline CSS
          $tag, // Tag
          $trackOpens, // Track opens
          NULL, // Reply To
          NULL, // CC
          NULL, // BCC
          NULL, // Header array
          NULL, // Attachment array
          $trackLinks, // Track links
          NULL, // Metadata array
          $messageStream // Message stream
        );
      } 
    } catch (Exception $e) {
      echo $batchEmail[$i] . " wasn't sent";
    }
  }
  $emailsSent = true;

  


