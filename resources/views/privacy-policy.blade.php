@extends('layouts.app')

@section('meta-tag')
<meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
<meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
@endsection

@section('page_title', "Privacy Policy")

@section('open-graph')
<meta name="theme-color" content="#026469">
<meta property="og:title" content="Ndako - Property Management System">
<meta property="og:image" content="{{ asset('assets/images/logo/logo-black.png') }}" />
<meta property="og:description" content="All-in-one hospitality platform" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ndako.koverae.com">
@endsection

@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/privacy.css')}}" type="text/css">
<style>

  .typing-effect::after {
    content: '|';
    animation: blink 0.7s steps(1) infinite;
  }
  @keyframes blink {
    50% { opacity: 0; }
  }
</style>
@endsection

@section('content')

<section class="privacy-section" id="hero">
   <header class="align-items-center" id="contents">
     <h1 class="caveat text-center mb-4">Our <span class="typing-effect"></span></h1>
   </header>

  <nav class="contents sticky-top">

     <h1>Contents</h1>

     <!-- Contents -->
     <ul class="mb-3">
         <li><a href="#personal-info">Personal info</a>
           <ul>
             <li><a href="#privacy-protection">How we protect your privacy</a></li>
             <li><a href="#access-info">Accessing, Updating or Deleting Your Personal Information</a></li>
           </ul>
         </li>

         <li><a href="#collection">Collection</a>
           <ul>
             <li><a href="#collect-info">Information we collect</a></li>
           </ul>
         </li>

         <li>
           <a href="#usage">Use</a>
           <ul>
             <li><a href="#usage-info">How we use this information</a></li>
           </ul>
         </li>

         <li>
           <a href="#disclosure">Disclosure</a>
           <ul>
             <li><a href="#disclosure-partners">Third Party Service Providers / Subprocessors</a></li>
             <li><a href="#subprocessor-partners">1. Subprocessors</a></li>
             <li><a href="#service-providers">2. Third-party Processors and Controllers</a></li>
             <li><a href="#third-disclosure">Third Party Disclosure</a></li>
           </ul>
         </li>

         <li><a href="#storage">Storage</a>
           <ul>
             <li><a href="#data-retention">Data Retention</a></li>
             <li><a href="#physical-location">Physical Data Location / Data Transfers</a></li>
             <li><a href="#cookies">Cookies</a></li>
           </ul>
         </li>

         <li>
           <a href="#security">Security</a>
           <ul>
               <li><a href="#backups">Backups / Disaster Recovery</a></li>
               <li><a href="#database-security">Database Security</a></li>
               <li><a href="#password-security">Password Security</a></li>
               <li><a href="#staff-access">Staff Access</a></li>
               <li><a href="#system-security">System Security</a></li>
               <li><a href="#physical-security">Physical Security</a></li>
               <li><a href="#card-safety">Credit Card Safety</a></li>
               <li><a href="#data-encryption">Data Encryption</a></li>
               <li><a href="#network-defense">Network defense</a></li>
           </ul>
         </li>

         <li>
           <a href="#misc">Legal</a>
           <!-- <ul><li><a href="#choice">Your choices</a></li>
             <li><a href="#change">Changes to this policy</a></li>
             <li><a href="#contact">Contact us</a></li>
           </ul> -->
         </li>

         <li><a href="#about-us">About Us</a>
           <ul><li><a href="#policy-updates">Your choices</a></li>
             <li><a href="#contact-us">Changes to this policy</a></li>
           </ul>
         </li>

     </ul>
     <!-- Contents -->
  </nav>


   <article class="container" style="margin-top: 40px;">
    <span class="font-weight-bold fs-4 text-muted">
      Last update: November 30, 2024
    </span>

     <div class="section border-bottom mb-3 mt-2" id="personal-info">
       <nav class="to-top"><a href="#contents" class="text-primary text-decoration-none">back to top <i class="bi bi-arrow-up"></i></a></nav>

       <h1>Personal Information</h1>

       <h2 class=" font-weight-normal mb-2" id="privacy-protection">How we protect your privacy</h2>
       <p class="pl-2 mb-2">
         on ndako.koverae.com and when you use our services
         <br>
         Koverae Ltd and its affiliates offer many services to help you run your business, including a platform to host your own Ndako database. As part of running those services we collect data about you and your business. This data is not only essential to run our services, but also critical for the safety of our services and all our users.
         This policy explains what information is collected, why it is collected, and how we use it.
       </p>

       <h2 class=" font-weight-normal mb-2" id="access-info">Accessing, Updating or Deleting Your Personal Information</h2>
       <p class="mt-2 pl-2">
         <b>Account & Contact Data:</b> You have the right to access and update personal data you have previously provided to us. You can do so at any time by connecting to your personal account on Ndako. If you wish to permanently delete your account or personal information for a legitimate purpose, please contact our <a href="#" class="text-primary">Helpdesk</a> to request so. We will take all reasonable steps to permanently delete your personal information, except when we are required to keep it for legal reasons (typically, for administration, billing and tax reporting reasons).
       </p>
       <p class="mt-2 pl-2">
         <b>Job Application Data:</b> You may contact us at any time to request access, updates or deletion of your application information. The easiest way to do it is to reply to the last message you exchanged with our Human Resource personnel.
       </p>
       <p class="mt-2 pl-2">
         <b>Customer Database:</b> You can manage any data collected in your databases hosted on ndako.koverae.com at any time, using your administration credentials, including modifying or deleting any personal data stored therein.
         At any time you can export a complete backup of your database via our control panel, in order to transfer it, or to manage your own backups/archive. You are responsible for processing this data in compliance with all privacy regulations.
         You may also request the deletion of your entire database via your control panel, at any time.
         When you use the Ndako Database Upgrade service, your data is automatically deleted after your upgrade was successfully completed, and may also be deleted upon request from you.
       </p>
       <p class="mt-2 pl-2">
         <b>Free Trial Session Recording:</b> You may contact us at any time to request access to or deletion of the recording of your trial session (see contact info below). Please remember to include the name or the URL of your database (e.g. mydatabase.koverae.com) to allow us to retrieve your specific recording. Recordings are automatically destroyed after 2 months, so if your trial is older than that the data does not exist anymore.
       </p>
     </div>

     <div class="section border-bottom mb-3 mt-2" id="personal-info">
       <nav class="to-top"><a href="#contents">back to top</a></nav>

       <h1 id="collection">How we collect info</h1>

       <h2 class="font-weight-normal mb-2" id="collect-info">Information we collect</h2>
       <p class="pl-2">
         Most of the personal data we collect is directly provided by our users when they register and use our services. Other data is collected by recording interactions with our services.

           <p class="mt-2 pl-2">
             <b>Account & Contact Data:</b> When you register on our website to use or download one of our products, or to subscribe to one of our services (Ndako Cloud, Free Trial, etc.), or fill in one of our contact forms, you voluntarily give us certain information. This typically includes your name, company name, email address, and sometimes your phone number, postal address (when an invoice or delivery is required),your business sector and interest in Koverae, as well as a personal password.
             We never record or store credit card information from our customers, and always rely on trusted third-party <a href="#third-party" class=" text-primary">PCI-DSS-compliant payment processors</a> for credit card processing, including for recurring payment processing.
           </p>
           <p class="mt-2 pl-2">
             <b>Job Application Data:</b> When you apply for a job on our website or via an employment agency, we usually collect your contact information (name, email, phone) and any information you choose to share with us in your introduction letter and Curriculum Vitae. If we decide to send you a job proposition, we will also ask you to provide extra personal details as required to fulfill our legal obligations and personnel management requirements.
             We will not ask you to provide information that is not necessary for the recruitment process. In particular, we will never collect any information about your racial or ethnic origin, political opinions, religious beliefs, trade union membership or sexual life.
           </p>
           <P class="mt-2 pl-2">
             <b>Browser Data:</b> When you visit our website and access our online services, we detect and store your browser language and geolocation in order to customize your experience according to your country and preferred language. Our servers also passively record a summary of the information sent by your browser for statistical, security and legal purposes: your IP address, the time and date of your visit and the page or resource you are accessing, your browser version and platform, and the web page that referred you to our website.
             Your browser may also be used to store and retrieved your current session data, with the help of a session cookie (see also the <a href="#cookie" class="text-primary">Cookie</a> section for more details).
           </P>
           <p class="mt-2 pl-2">
             <b>Form protection:</b> some forms on our website may be protected by <strong>Google reCAPTCHA</strong>. This technology relies on heuristics that are based on technical characteristics of your browser and device, and may also use specific Google cookies. See also Google Privacy Policy and Terms of Use in the <a href="#third-party" class="text-primary">Third Party Service Providers</a> section below.
           </p>
           <p class="mt-2 pl-2">
             <b>Customer Databases:</b> When you subscribe to an Ndako Cloud service and create your own Ndako database (for example by starting a Free Trial), any information or content you submit or upload into your database is your own, and you control it fully.
             <br>
             Similarly, when you upload an on-premises database to the Ndako Upgrade website, you own the data in it.
             This data will often include personal information, for example: your list of employees, your contacts and customers, your messages, pictures, videos, etc. We only ever collect this information on your behalf, and <strong>you always retain ownership and full control on this data</strong>.
           </p>
           <p class="mt-2 pl-2">
             <b>Free Trial Session Recording:</b> When you start a free trial on our <strong>Ndako Cloud</strong> service, you may be offered the possibility to consent to the recording of the beginning for your free trial session in order to help us improve the user experience of our products.
             <br>
             If you consent, the information that is collected includes what is visible on the screen during the first <strong>2 hours of your free trial</strong>, as well as your interactions with our apps (where you click, which menu you open, etc.). This data is consolidated in the form of a video that our User Experience experts can watch for a limited time.
             This will likely include some personal data such as names, emails, phone numbers, pictures, depending on what real-world information you input into your database during the recording period. Password fields and other sensitive fields are <strong>automatically excluded</strong> from the recording, but we cannot entirely exclude the possibility that some sensitive information may be recorded, depending on where you type it.
             <br>
             If you do not consent or if we do not offer you the option to opt-in, your trial session <strong>will not be recorded</strong> and <strong>no data</strong> will be collected for this purpose.
           </p>
       </p>
     </div>

     <div class="section border-bottom mb-3 mt-2" id="usage">
       <nav class="to-top"><a href="#contents" class="text-primary text-decoration-none">back to top <i class="bi bi-arrow-up"></i></a></nav>

       <div class=" p-2">

       <h1>Usage</h1>

         <h2 class=" font-weight-normal mb-2" id="usage-info">How we use this information</h2>
         <p class="pl-2">
           <b>Account & Contact Data:</b> We use your contact information in order to provide our services, to answer your requests, and for billing and account management reasons. We may also use this information for marketing and communication purposes (our marketing messages always come with a way for you to opt-out at any time). We also use this data in aggregated/anonymised form in order to analyze service trends.
           If you have registered to participate in an event published on our website, we may transfer your name, email address, phone number and company name to our local organizer and to the sponsors of the event for both direct marketing purposes and in order to facilitate the preparations and booking for the event.
           If you have expressed interest in using Ndako or otherwise asked to be contacted by an Ndako service provider, we may also transfer your name, email address, phone number and company name to one of our official <a href="https://www.ndako.koverae.com/partners" class="text-primary">Partners</a> in your country or region, for the purpose of contacting you to offer their local assistance and services.
           <p class="mt-2 pl-2">
             <b>Job Application Data:</b> We will only process this information for our recruitment process, in order to evaluate and follow-up with your application, and in the course of preparing your contract, if we decide to send you a job proposition. You may contact us at any time to request the deletion of your information.
           </p>
           <p class="mt-2 pl-2">
             <b>Browser Data:</b> This automatically recorded data is anonymously analyzed in order to maintain and improve our services. Google reCAPTCHA may also be used for security purposes, in order to prevent abuse of our services. In that case we only process the anonymous score that reCAPTCHA determines based on your browser and device.
             We will only correlate this data with your personal data when required by law or for security purposes, if you have violated our <a href="#" target="_blank" class="text-primary">Acceptable Use Policy</a>.
           </p>
           <p class="mt-2 pl-2">
             <b>Customer Database:</b> We only collect and process this data on your behalf, in order to perform the services you have subscribed to, and based on the instructions you explicitly gave when you registered or configured your service and your Ndako database.
             Our Helpdesk staff and engineers may access this information in a limited and reasonable manner in order to solve any issue with our services, or at your explicit request for support reasons, or as required by law, or to ensure the security of our services in case of violation of our <a href="#" class="text-primary">Acceptable Use Policy</a> in order to keep our services secure.
           </p>
           <p class="mt-2 pl-2">
             <b>Free Trial Session Recording:</b> The purpose of these recordings is to improve our products: they will be seen and analysed solely by our R&D Usability team, who will treat your data as strictly confidential information. By watching the recordings they will be able to see a tangible representation of a user’s first steps into Ndako and improve the User Experience accordingly.
           </p>
         </p>

       </div>
     </div>

     <div class="section border-bottom mb-3 mt-2" id="personal-info">
       <nav class="to-top"><a href="#contents">back to top</a></nav>

       <h1 id="disclosure">Disclosure</h1>

       <h2 class="font-weight-normal mb-2" id="disclosure-partners">Third Party Service Providers / Subprocessors</h2>
       <p class="mt-2 pl-2">
         In order to support our operations we rely on several <strong>Service Providers</strong>. They help us with various services such as payment processing, web audience analysis, cloud hosting, marketing and communication, etc.
         <br>
         Whenever we share data with these Service Providers, we make sure that they use it in compliance with Data Protection legislation, and that the processing they carry out for us is limited to our specific purpose and covered by a specific data processing contract.
         <br>
         Below is a list of the Service Providers we are currently using, why we use them, and what kind of data we share with them.
       </p>

       <h2 class="font-weight-normal mb-2" id="subprocessor-partners">1. Subprocessors</h2>
       <p class="mt-2 pl-2">
         These third-party service providers are processing data for which Ndako is Controller or Processor, on behalf of Koverae.
       </p>
       <div class="k-alert" style="width: 100%; font-size: 14px;">
         <p>
           <b> <i class="bi bi-info-circle-fill"></i> Important:</b> due to the great variability in resources and services provided by these subprocessors, Ndako Customers cannot select the subprocessor that will be used to process their data. They can however choose their main hosting region (see the <a href="#data-location" class="text-primary"><b>Data Location</b></a> section).
         </p>
       </div>

       <!-- SubProcessors -->
       <table class="table">
         <thead>
           <tr>
             <th scope="col-4">Subprocessors</th>
             <th scope="col-4">Purpose</th>
             <th scope="col-4">Shared Data</th>
           </tr>
         </thead>
         <tbody>

           <tr>
             <td class="col-3">
               Ligne Web Services (LWS) <br>
               <a href="#" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Infrastructure and hosting of koverae.com <br>
               (production + backups),
               Ndako SaaS (production + backups),<br>
             </td>
             <td class="col-4">
               <b>Currently hosted by LWS:</b> <br>
               <p>
                 Production data from koverae.com and its affiliate services, including Ndako Cloud (SaaS) Customer Databases, and the Ndako Database Upgrade services, including Customer databases currently being upgraded; Backup data for all Ndako cloud services.
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Google Cloud EMEA Ltd <br>
               <a href="https://policies.google.com/privacy" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Infrastructure and hosting of koverae.com <br>
               (production + backups),
               Ndako SaaS (production + backups),<br>
             </td>
             <td class="col-4">
               <b>Currently hosted by Google:</b> <br>
               <p>
                 Production data from koverae.com and its affiliate services, including Ndako Cloud (SaaS) Customer Databases, and the Ndako Database Upgrade services, including Customer databases currently being upgraded; Backup data for all Ndako cloud services.
               </p>
             </td>
           </tr>

         </tbody>
       </table>
       <!-- SubProcessors -->


       <h2 class="font-weight-normal mb-2" id="service-providers">2. Third-party Processors and Controllers</h2>
       <p class="mt-2 pl-2">
         These third-party service providers are processing data for which Ndako is a Controller, as Processors, on behalf of Koverae, or they are receiving such data as Controllers, for the specific purpose of performing the services they have been contracted to provide.
       </p>

       <!-- SubProcessors -->
       <table class="table">
         <thead>
           <tr>
             <th scope="col-4">Service Provider</th>
             <th scope="col-4">Purpose</th>
             <th scope="col-4">Shared Data</th>
           </tr>
         </thead>
         <tbody>

           <tr>
             <td class="col-3">
               Stripe <br>
               <a href="http://www.visa.com/splisting/searchGrsp.do?companyNameCriteria=stripe" target="_blank" class="text-primary font-weight-bold">PCI</a> • <a href="https://stripe.com/be/privacy" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Payment processing on Ndako
             </td>
             <td class="col-4">
               <b>Shared with Stripe:</b> <br>
               <p>
                 Order details (amount, description, reference), Customer name and email. <br>
                 <b>Only stored by Stripe:</b> credit card info.
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Flutterwave <br>
               <a href="http://www.visa.com/splisting/searchGrsp.do?companyNameCriteria=stripe" target="_blank" class="text-primary font-weight-bold">PCI</a> • <a href="https://stripe.com/be/privacy" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Payment processing on Ndako
             </td>
             <td class="col-4">
               <b>Shared with Flutterwave:</b> <br>
               <p>
                 Order details (amount, description, reference), Customer name and email. <br>
                 <b>Only stored by Flutterwave:</b> credit card info.
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Google Analytics <br>
               <a href="https://support.google.com/analytics/answer/6004245" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Anonymous website audience analysis. <br>
               <a href="https://tools.google.com/dlpage/gaoptout?hl=en" class="text-primary">Opt-out</a>

             </td>
             <td class="col-4">
               <b>Shared with Google Analytics:</b> <br>
               <p>
                 Non-personal browser data, anonymized IP, geolocation info, language (no identifiable information).
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Google reCAPTCHA <br>
               <a href="https://policies.google.com/privacy_policy" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Browser and device characteristics, Google cookies.
             </td>
             <td class="col-4">
               <b>Used by Google reCAPTCHA:</b> <br>
               <p>
                 Browser and device characteristics, Google cookies.
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Acuity Scheduling <br>
               <a href="https://help.acuityscheduling.com/hc/en-us/articles/219149587-Security-Privacy-Compliance" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a>
             </td>
             <td class="col-5">
               Scheduling of demo/meeting on ndako.koverae.com

             </td>
             <td class="col-4">
               <b>Shared with Acuity:</b> <br>
               <p>
                 Any personal info entered by the user in the scheduling form: name and contact info, reason for request, etc.
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               CloudFlare <br>
               <a href="https://www.cloudflare.com/privacypolicy/" target="_blank" class="text-primary font-weight-bold">Privacy & Security</a> •
               <a href="https://support.cloudflare.com/hc/en-us/articles/200170156-Understanding-the-Cloudflare-Cookies#12345682" target="_blank" class="text-primary font-weight-bold">Cookie Policy</a>
             </td>
             <td class="col-5">
               Distributed caching of static resources and images of <strong>Ndako</strong>
             </td>
             <td class="col-4">
               <b>Used by CloudFlare:</b> <br>
               <p>
                 Browser and device characteristics, CloudFlare cookies.
               </p>
             </td>
           </tr>

         </tbody>
       </table>
       <!-- SubProcessors -->

     </div>

     <div class="section border-bottom mb-3 mt-2" id="storage">
       <nav class="to-top"><a href="#contents" class="text-primary text-decoration-none">back to top <i class="bi bi-arrow-up"></i></a></nav>

       <h1>Storage</h1>

       <h2 class=" font-weight-normal mb-2" id="date-retention">Data Retention</h2>
       <p class="pl-2 mt-2">
         <b>Account & Contact Data:</b> we will only retain such data as long as necessary for the purpose for which it was collected, as laid out in this policy, including any legal retention period, or as long as necessary to carry out a legitimate and reasonable promotion of our products and services.
       </p>
       <p class="mt-2 pl-2">
         <b>Browser Data:</b> we may retain this data for a maximum of 12 months, unless we need to keep it in relation with a legitimate concern related to the security or performance of our services, or as required by law. Any server-side session information is discarded maximum 7 days after it stops being actively used
       </p>
       <p class="mt-2 pl-2">
         <b>Server Logs & Security Logs:</b> we retain those logs for a maximum of 12 months, unless we need to keep them in relation with a legitimate concern related to the security or performance of our services, or as required by law.
       </p>
       <p class="mt-2 pl-2">
         <b>Customer Database:</b> we will only retain this data as long as necessary for providing the services you subscribed to. For databases hosted on the Ndako Cloud, if you cancel the service your database is kept deactivated for 3 weeks (the grace period during which you can change your mind), and then destroyed. For databases uploaded to the Ndako Database Upgrade website, your database is kept for up to 4 months after the last successful upgrade, and may be deleted earlier upon request.
       </p>
       <div class="k-alert align-items-start" style="width: 100%; font-size: 14px;">
         <p>
           <b> <i class="bi bi-info-circle-fill"></i> Safety Retention Period:</b> As part of our Security Policy, we always try to preserve your data from accidental or malicious deletion. As a result, after we delete any of your personal information (Account & Contact Data) from our database upon request from you, or after you delete any personal information from your database (Customer Database), or if you delete your entire database, it is not immediately deleted from our backup systems, which are secured and inalterable. The personal data could remain stored for up to 12 months in those backups, until they are automatically destroyed.
           We commit not to use those backup copies of your deleted data for any purpose except for maintaining the integrity of our backups, unless you or the law require us to do so.
         </p>
       </div>

       <h2 class=" font-weight-normal mb-2" id="physical-location">Physical Data Location / Data Transfers</h2>
       <p class="mt-2 pl-2">
         <b>Hosting Locations:</b> customer databases are hosted in the Ndako Cloud Region closest to where they are based, and can request a change of region (subject to availability):
         <br>
         • Americas: United States <br>
         • Europe: France <br>
         • Africa: Kenya <br>
       </p>
       <p class="mt-2 pl-2">
         <b>Backup Locations:</b> backups are replicated on multiple continents in order to meet our Disaster Recovery objectives, and are located in the following countries, regardless of the original hosting region:
         <br>
         <b>Kenya</b> <i class="bi bi-globe-americas"></i> <br>
         <b>France</b> <i class="bi bi-globe-americas"></i> <br>
       </p>

       <h2 class=" font-weight-normal mb-2" id="third-disclosure">Third Party Disclosure</h2>
       <p class="mt-2 pl-2">
         Except as explicitly mentioned above, we do not sell, trade, or otherwise transfer your personal data to third parties. We may share or disclose aggregated or de-identified information, for research purposes, or to discuss trends or statistics with third-parties.
       </p>

       <h2 class=" font-weight-normal mb-2" id="cookies">Cookies</h2>
       <p class="mt-2 pl-2">
         Cookies are small bits of text sent by our servers to your computer or device when you access our services. They are stored in your browser and later sent back to our servers so that we can provide contextual content. Without cookies, using the web would be a much more frustrating experience. We use them to support your activities on our website, for example your session (so you don't have to login again) or your shopping cart.
       </p>
       <p class="mt-2 pl-2">
         Cookies are also used to help us understand your preferences based on previous or current activity on our website (the pages you have visited), your language and country, which enables us to provide you with improved services. We also use cookies to help us compile aggregate data about site traffic and site interaction so that we can offer better site experiences and tools in the future.
       </p>
       <p class="mt-2 pl-2">
         We also use third-party services such as Google Analytics, who set and use their own cookies to identify visitors and provide their own contextual services. For more information regarding those third-party providers and their Cookie Policy, please see the relevant references in the <a href="#service-providers" class="text-primary">Third-Party Service Providers</a> section.
       </p>
       <p class="mt-2 pl-2">
         Here is an overview of the cookies that may be stored on your device when you visit our website:
       </p>
       <!-- Cookie Types -->
       <table class="table">
         <thead>
           <tr>
             <th scope="col-4">Category of Cookie</th>
             <th scope="col-4">Purpose</th>
             <th scope="col-4">Cookies</th>
           </tr>
         </thead>
         <tbody>

           <tr>
             <td class="col-3">
               Session & Security <br>
             </td>
             <td class="col-5">
                 Authenticate users, protect user data and allow the website to deliver the services users expect, such as maintaining the content of their cart, or allowing file uploads.
                 <br>
                 The website will not work properly if you reject or discard those cookies.
             </td>
             <td class="col-4">
               <p>
                 session_id (Ndako) <br>
                 td_id (Ndako) <br>
                 fileToken (Ndako) <br>
                 __cfduid (CloudFlare) <br>
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Preferences
             </td>
             <td class="col-5">
               Remember information about the preferred look or behavior of the website, such as your preferred language, region and timezone. Your experience may be degraded if you discard those cookies, but the website will still work.
             </td>
             <td class="col-4">
               <p>
                 frontend_lang (Ndako) <br>
                 cids (Ndako) <br>
                 Ndako_no_push (Ndako) <br>
                 tz (Ndako)
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Interaction History
             </td>
             <td class="col-5">
                 Used to collect information about your interactions with the website, the pages you've seen, and any specific marketing campaign that brought you to the website. We may not be able to provide the best service to you if you reject those cookies, but the website will work.
             </td>
             <td class="col-4">
               <p>
                 utm_campaign (Ndako) <br>
                 utm_source (Ndako) <br>
                 utm_medium (Ndako) <br>
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Advertising & Marketing
             </td>
             <td class="col-5">
               <p>Used to make advertising more engaging to users and more valuable to publishers and advertisers, such as providing more relevant ads when you visit other websites that display ads or to improve reporting on ad campaign performance.</p>
               <p class="mt-1">
                 Note that some third-party services may install additional cookies on your browser in order identify you.
               </p>
               <p class="mt-1">
                 You may opt out of a third-party's use of cookies by visiting the <a href="https://optout.networkadvertising.org/?c=1" target="_blank" class="text-primary">Network Advertising Initiative opt-out page</a>. The website will still work if you reject or discard those cookies.
               </p>
             </td>
             <td class="col-4">
               <p>
                 __gads (Google) <br>
                 __gac (Google) <br>
                 _fbp (Facebook)
               </p>
             </td>
           </tr>

           <tr>
             <td class="col-3">
               Analytics
             </td>
             <td class="col-5">
               <p>Understand how visitors engage with our website, via Google Analytics. Learn more about <a href="https://developers.google.com/analytics/resources/concepts/gaConceptsCookies?hl=en" target="_blank" class="text-primary">Analytics cookies and privacy information</a>.</p>
               <p class="mt-2">The website will still work if you reject or discard those cookies.</p>
             </td>
             <td class="col-4">
               <p>
                 _ga (Google) <br>
                 _gat (Google) <br>
                 _gid (Google) <br>
                 _gac_* (Google)
               </p>
             </td>
           </tr>

         </tbody>
       </table>
       <!-- Cookie Types -->

       <p class="mt-2">
         You can choose to have your computer warn you each time a cookie is being sent, or you can choose to turn off all cookies. Each browser is a little different, so look at your browser's Help menu to learn the correct way to modify your cookies, or look at the links below.
         <ul>
           <li class="text-black-50">
             <b>Chrome:</b> <a target="_blank" href="https://support.google.com/chrome/answer/95647?hl=en" class="text-primary">https://support.google.com/chrome/answer/95647?hl=en </a>
           </li>
           <li class="text-black-50">
             <b>Firefox:</b> <a target="_blank" href="https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer" class="text-primary">https://support.mozilla.org/en-US/kb/cookies-information-websites-store-on-your-computer</a>
           </li>
           <li class="text-black-50">
             <b>Safari:</b> <a target="_blank" href="https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac" class="text-primary">https://support.apple.com/guide/safari/manage-cookies-and-website-data-sfri11471/mac</a>
           </li>
           <li class="text-black-50">
             <b>Opera:</b> <a target="_blank" href="https://help.opera.com/en/latest/web-preferences/#cookies" class="text-primary">https://help.opera.com/en/latest/web-preferences/#cookies</a>
           </li>
           <li class="text-black-50">
             <b>Edge:</b> <a target="_blank" href="https://support.microsoft.com/en-us/help/4468242/microsoft-edge-browsing-data-and-privacy" class="text-primary">https://support.microsoft.com/en-us/help/4468242/microsoft-edge-browsing-data-and-privacy</a>
           </li>
         </ul>
       </p>


     </div>

     <div class="section border-bottom mb-3 mt-2" id="security">
       <nav class="to-top"><a href="#contents" class="text-primary text-decoration-none">back to top <i class="bi bi-arrow-up"></i></a></nav>

       <h1>Security</h1>
       <p class="pl-2">
         Your security is very important to us! Here is a summary of what we do every day to guarantee that your data is safe with Ndako and that we apply best security practices on our hosted version, the Ndako Cloud.
       </p>
       <h2 class=" font-weight-normal mb-2" id="backups">Backups / Disaster Recovery</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             We keep 14 full backups of each Ndako database for at least 3 months: 1/day for 7 days, 1/week for 4 weeks, 1/month for 3 months.
           </li>
           <li>
             The actual locations of our data centers are specified in our <a href="#storage" class="text-primary">Privacy Policy</a>.
           </li>
           <li>
             You can contact our Helpdesk to restore any of those backups on your live database (or on the side).
           </li>
           <li>
             <b>Hardware failover</b>: for services hosted on bare metal, where hardware failure is possible, we implement local hot standby replication, with monitoring and a manual failover procedure that takes less than 5 minutes.
           </li>
         </ul>
       </p>

       <h2 class=" font-weight-normal mb-2" id="database-security">Database Security</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             Each customer’s data is stored in a logically separated environment with strong encryption and access controls, ensuring complete data privacy and security across all clients.
           </li>
           <li>
             Data access control rules ensure strict isolation between customer environments within our shared database, guaranteeing that no cross-client access is possible.
           </li>
         </ul>
       </p>

       <h2 class=" font-weight-normal mb-2" id="password-security">Password Security</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             Customer passwords are protected with industry-standard PBKDF2+SHA512 encryption (salted + stretched for thousands of rounds).
           </li>
           <li>
             Koverae staff does not have access to your password, and cannot retrieve it for you, the only option if you lose it is to reset it.
           </li>
           <li>
             Login credentials are always transmitted securely over HTTPS.
           </li>
           <li>
             <b>Password policies:</b> database administrators have a built-in setting for enforcing a minimum user password length. Other password policies like required character classes are not supported by default because they have been proven counter-productive.
           </li>
         </ul>
       </p>

       <h2 class=" font-weight-normal mb-2" id="staff-access">Staff Access</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             Koverae helpdesk staff may sign into your account to access settings related to your support issue. For this they use their own special staff credentials, not your password (which they have no way to know).
           </li>
           <li>
             This special staff access improves efficiency and security: they can immediately reproduce the problem you are seeing, you never need to share your password, and we can audit and control staff actions separately!
           </li>
           <li>
             Our Helpdesk staff strives to respect your privacy as much as possible, and only access files and settings needed to diagnose and resolve your issue.
           </li>
         </ul>
       </p>

       <h2 class=" font-weight-normal mb-2" id="system-security">System Security</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             All Ndako Cloud servers are running hardened Linux distributions with up-to-date security patches.
           </li>
           <li>
             Only a few trusted Koverae engineers have clearance to remotely manage the servers - and access is only possible using an encrypted personal SSH keypair, from a computer with full-disk encryption.
           </li>
         </ul>
       </p>

       <h2 class="font-weight-normal mb-2" id="physical-security">Physical Security</h2>
       <p class="mt-2 pl-2">
         Ndako Cloud servers are hosted in trusted data centers in various regions of the world (e.g. LWS, Google Cloud), and they must all exceed our physical security criterions:
       </p>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             Restricted perimeter, physically accessed by authorized data center employees only.
           </li>
           <li>
             Physical access control with security badges or biometrical security.
           </li>
           <li>
             Security cameras monitoring the data center locations 24/7.
           </li>
           <li>
             Security personnel on site 24/7.
           </li>
         </ul>
       </p>

       <h2 class="font-weight-normal mb-2" id="card-security">Credit Card Safety</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             We never store credit card information on our own systems without your consent.
           </li>
           <li>
             Your credit card information is always transmitted securely directly between you and our <a href="https://www.pcisecuritystandards.org/" class="text-primary">PCI-Compliant</a> payment acquirers (see the list on our <a href="#service-providers" class="text-primary">Privacy Policy</a> page).
           </li>
         </ul>
       </p>

       <h2 class="font-weight-normal mb-2" id="data-encryption">Data Encryption</h2>
       <p class="pl-2 mb-2">
         Customer data is always transferred and stored in encrypted form (encryption in transit and at rest).
         <ul class="text-black-50 pl-4">
           <li>
             All data communications to client instances are protected with state-of-the-art 256-bit SSL encryption (HTTPS).
           </li>
           <li>
             All internal data communications between our servers are also protected with state-of-the-art encryption (SSH).
           </li>
           <li>
             Our servers are kept under a strict security watch, and always patched against the latest SSL vulnerabilities, enjoying <a href="https://www.ssllabs.com/ssltest/analyze.html?d=www.ndako.koverae.com" class="text-primary"><strong>Grade A</strong></a> SSL ratings at all times.
           </li>
           <li>
             All our SSL certificates use robust 2048-bit modulus with full SHA-2 certificates chains.
           </li>
           <li>
             All customer data (database content and stored files) is encrypted at rest, both in production and in backups (AES-128 or AES-256)
           </li>
         </ul>
       </p>

       <h2 class=" font-weight-normal mb-2" id="network-defense">Network Defense</h2>
       <p class="pl-2 mb-2">
         <ul class="text-black-50 pl-4">
           <li>
             All data center providers used by Ndako Cloud have very large network capacities, and have designed their infrastructure to withstand the largest Distributed Denial of Service (DDoS) attacks. Their automatic and manual mitigation systems can detect and divert attack traffic at the edge of their multi-continental networks, before it gets the chance to disrupt service availability.
           </li>
           <li>
             Firewalls and intrusion prevention systems on Ndako Cloud servers help detect and block threats such as brute-force password attacks.
           </li>
           <li>
             Customer database administrators even have the option to configure the rate limiting and cooldown duration for repeated login attempts.
           </li>
         </ul>
     </div>

     <div class="section mb-3 mt-2" id="about-us">
       <nav class="to-top"><a href="#contents" class="text-primary text-decoration-none">back to top <i class="bi bi-arrow-up"></i></a></nav>

       <h1>About Us</h1>

       <h2 class=" font-weight-normal mb-2" id="policy-updates">Policy Updates</h2>
       <p class="pl-2 mb-2">
         We may update this Privacy Policy from time to time, in order to clarify it, to reflect any changes to our website, or to comply with legal obligations. The "Last Updated" mention at the top of the policy indicates the last revision, which is also the effective date of those changes. We give you access to archived versions of this policy, so you can review the changes.
       </p>

       <h2 class=" font-weight-normal mb-2" id="contact-us-updates">Contacting Us</h2>
       <p class="pl-2 mb-2">
         If you have are any question regarding this Privacy Policy, or any enquiry about your personal data,please reach out to the <a href="{{route('help')}}" class="text-primary">Ndako Helpdesk</a> or contact us via email at <a href="mailto:privacy@ndako.koverae.com" class="text-primary">privacy@ndako.koverae.com</a>.
       </p>
     </div>


   </article>
</section>
@endsection

@section('scripts')

<script>
    // Array of phrases to type out
    const phrases = ["Privacy Policy", "Security Policy", "Terms & Conditions"];
    let currentPhrase = 0;
    let currentText = "";
    let isDeleting = false;

    const typingEffect = document.querySelector(".typing-effect");

    function type() {
      const fullText = phrases[currentPhrase];

      if (isDeleting) {
        // Remove a character
        currentText = fullText.substring(0, currentText.length - 1);
      } else {
        // Add a character
        currentText = fullText.substring(0, currentText.length + 1);
      }

      typingEffect.textContent = currentText;

      // Speed controls for typing and deleting
      let typingSpeed = isDeleting ? 50 : 100;

      if (!isDeleting && currentText === fullText) {
        // Pause at the end of each phrase
        typingSpeed = 2000;
        isDeleting = true;
      } else if (isDeleting && currentText === "") {
        // Move to the next phrase
        isDeleting = false;
        currentPhrase = (currentPhrase + 1) % phrases.length;
        typingSpeed = 500;
      }

      setTimeout(type, typingSpeed);
    }

    // Start the typing effect
    type();
</script>
@endsection
