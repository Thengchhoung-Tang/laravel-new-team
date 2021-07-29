<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Backpack\Settings\app\Models\Setting;


class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * php artisan db:seed --class=SettingSeeder
     * // config('settings.care_center');
     */
    protected const TEXTFIELD = '{"name":"value","label":"Value","type":"text"}';
    protected const SUMMERNOTE = '{"name":"value","label":"Value","type":"summernote"}';

    public function run()
    {        
        Setting::firstOrCreate(['key' => 'care_center'], [
            'name' => 'Care Center Phone',
            'description' => 'Care Center Phone',
            'value' => '+855 85 813 777',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'head_office_address_en'], [
            'name' => 'Head Office​ Address',
            'description' => 'Head Office Address',
            'value' => '#50, 3rd floor, St. 516 corner of 335, Village 6, Boeung Kak I, Khan Toul Kork, Phnom Penh, Cambodia.',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'head_office_address_kh'], [
            'name' => 'អាសយដ្ឋានការិយាល័យកណ្តាល',
            'description' => 'អាសយដ្ឋានការិយាល័យកណ្តាល',
            'value' => '#50, ជាន់ទីបី,ផ្លូវលេខ 516 កែងនឹង 335, village 6, Boeung Kak I, Khan Toul Kork, Phnom Penh, Cambodia.',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'privacy_policy_kh'], [
            'name' => 'គោលការណ៍​ភាព​ឯកជន',
            'description' => 'គោលការណ៍​ភាព​ឯកជន',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'privacy_policy_en'], [
            'name' => 'Privacy Policy',
            'description' => 'Privacy Policy',
            'value' => '<p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;1. <u>IMPORTANT INFORMATION RELATED TO PRIVACY<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">You shall and
            are advised to read our Private Policy (herein called the "Policy")
            carefully before continuing to use our Mobile Application (Mobile App). This Policy
            describes in details how your personal information is being collected, stored,
            used, disclosed, processed or otherwise managed by </span><b style="font-family: Arial, sans-serif; font-size: 12pt;">Z1 App</b><span style="font-family: Arial, sans-serif; font-size: 12pt;">&nbsp;and our
            affiliates (herein called, “</span><b style="font-family: Arial, sans-serif; font-size: 12pt;">we</b><span style="font-family: Arial, sans-serif; font-size: 12pt;">,” “</span><b style="font-family: Arial, sans-serif; font-size: 12pt;">our</b><span style="font-family: Arial, sans-serif; font-size: 12pt;">,” or “</span><b style="font-family: Arial, sans-serif; font-size: 12pt;">us</b><span style="font-family: Arial, sans-serif; font-size: 12pt;">”). By using
            our Mobile App, you agree to enter into an agreement with us and you
            unconditionally agree with all terms contained in this policy without any
            reservation. IF YOU DO NOT AGREE WITH ANY OF THESE TERMS, DO NOT USE THIS MOBILE
            APP.</span><br></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">2. <u>OUR RESPECT OF YOUR PRIVACY</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">We strive to
            protect and maintain privacy and transparency of collected information from users of the Mobile App (App Users). Without prejudice to terms of our Policy, we respect all applicable legal pro</span><span style="font-family: Arial, sans-serif; font-size: 12pt;">visions relating to privacy under Cambodian laws.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">3. <u>COLLECTION OF YOUR PERSONAL INFORMATION</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">All personal information collected by the Mobile App is provided voluntarily by you. If you decline to provide us with all or some of your personal information, you may not be able to use some certain services of the Mobile App.</span><br></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">Only necessary and relevant information may be collected including, but not limited to, your phone number, name, email, residence and address, gender, contact, occupation etc. Such information may be collected for the purposes such as: creating and logging into your account to use our Mobile App, posting information on our Mobile App, filling in forms including inquiries, questionnaires, surveys, requests and reports on our Mobile App, subscribing to our services, and contacting us etc.<o:p></o:p></span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">4. <u>USE OF YOUR PERSONAL INFORMATION</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">By providing us your personal information, you voluntarily allow us or we are entitled to use your personal information for the following purposes:<o:p></o:p></span></p>

            <ul><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Providing relevant support and services requested by you or deemed relevant or/and necessary to you including, but not limit to, for example, advertising, marketing and promotional products and services, and other information that we think may interest you; </span></li>
            <li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Improving our services through contacting you to fill in or complete surveys or questionnaires with regard to the improvement or development of new services, features and offerings, etc.;</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Notifying you the updates about any change with regard to our Terms and Policy, etc;</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="text-indent: -0.25in;"><font face="Arial, sans-serif"><span style="font-size: 12pt;">Securing and protecting our business against any cyber-crime or attempt to commit cyber-crime by allowing us to investigate, detect and take necessary actions to prevent or repress unlawful or unauthorized acts such as fraud, unauthorized access or other threats to carry out illegitimate acts as prohibited under Cambodian laws;</span></font></span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="text-indent: -0.25in;"><font face="Arial, sans-serif"><span style="font-size: 12pt;">Sharing your personal information with our business partners and third parties so that they can reach out to you directly on our behalf to demonstrate their products and services; and</span></font></span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="text-indent: -0.25in;"><font face="Arial, sans-serif"><span style="font-size: 12pt;">Complying with our internal regulations and external legal obligations, including but not limit to, audits, reports, corporate governance, business operation, dispute resolution and litigation etc.</span></font></span></li></ul><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="font-size: 1rem; text-indent: -0.25in;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">5. <u>DISCLOSURE OF YOUR PERSONAL INFORMATION</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">By providing us your personal information, you voluntarily allow us and we are entitled to disclose your personal information to the following persons/entities pursuant to article 4:</span></p><ul><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Our affiliates: we may disclose your personal information to our affiliated companies, staff, agents and business partners. Their use of your privacy will be subject to this policy.</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Our service providers: we may disclose your personal information to our service providers who are assigned to perform the services for us including hosting, advising, auditing and other relevant services.</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Real estate agency and developers: we may disclose your personal information to real estate agencies and developers who may provide you services of your interest.</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Third parties: we may disclose your personal information to third parties who you let us to do so.</span></li><li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Business transfers: We may disclose your personal information to our forthcoming affiliates that join our company as result of merger and acquisition, asset transfers, succession, bankruptcy or other forms of business transfers.</span></li>

            <li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Authorities: We may disclose your personal information to public authorities should it be a legal requirement. We may also disclose your personal information to public authorities to protect our rights and claims, should it be necessary to do so.</span></li>

            <li style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt; text-indent: -0.25in;">Other third parties: We may disclose your personal information to other third parties who you let us. </span></li>

            </ul><p class="MsoListParagraphCxSpMiddle" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;6. <u>SECURITY AND DATA RETENTION</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><span style="font-size: 12pt;"><br></span></font></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><font face="Arial, sans-serif"><span style="font-size: 12pt;">We are committed to the security and protection of your privacy. To do so, we exploit up-to-date technical and administrative tools and procedure to protect your privacy from unauthorized access or theft etc. However, despite our efforts, , it must be acknowledged that no security measure is ever perfect. We are committed to taking reasonable administrative and technical steps to fix, restitute and prevent future reoccurrence. However, we will not take any responsibility for any events or consequences beyond our control as result of unauthorized access to your personal information. We require that, in the event that the security of your account is being in danger, you report to us immediately.</span></font></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">We will retain your personal information up until the period necessary to fulfill our purposes and business objectives as outlined this Policy or for a longer period as permitted by law.</span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">7. <u>EXPORT OF PERSONAL INFORMATION OUTSIDE CAMBODIA</u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">Please be
            aware that for technology and safety reasons, your personal information
            provided to us may be held in the servers outside of Cambodia. By providing us
            your personal information, you agree to allow us to transfer your information outside
            of Cambodia for the above mentioned purposes.</span><br></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">8. <u>OPTIONS AND RIGHT TO CHOOSE</u></span></b><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p><br></o:p></span></b></p>

            <ul><li style="text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">Marketing:</span></b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">&nbsp;you may opt out from receiving marketing-related communications from us by promptly contacting us or by unsubscribing. We will do our best to comply with your request(s). Please be reminded that even if you opt out from receiving marketing-related emails from us, you will continue to receive certain important administrative messages from us.</span></li>
            <li style="margin-top: 0in; text-align: justify; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-family: Helvetica, sans-serif;">Cookies:</span></b><span style="font-family: Helvetica, sans-serif;"> we may use first party and third-party cookies, plugins, and other tools to gather and/or collect information when users access our Services. For example, when you begin using our Services, our server may record your IP address and other information such as the type of operating system, its version, screen resolution, and other information related to your device. We may record this information for security purposes or for the improvement of your experience in using our Services. We may also collect statistical information in order to continually improve and upgrade our apps from time to time. If you have disable one or more cookies, we may still use or retain information collected from the previous cookies you used. However, we will stop using the disabled cookie to collect any further information.<strong><span style="font-weight: normal;"> </span></strong>If
            you have disable one or more cookies, we may still use or retain information
            collected from the previous cookies you used. However, we will stop using the
            disabled cookie to collect any further information.</span></li><li style="text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">Review,
            amendment and deletion:</span></b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">&nbsp;You may have the right to request for review, amendment, deletion of your personal information, provided that the regulations related to privacy permit so. Should you wish to do so, please feel free to contact us based on article 11 below.</span></li><li style="text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">Deactivation:</span></b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;"> You can deactivate your account at any time by using any means available on our Mobile App or otherwise by contacting us. Provided that you request us to assist you in such deactivation, we will do our best to respond to your request in an appropriate period of time. However, please bear in mind that once your account is deactivated, you will not be able to access any of the services.</span><span style="font-size: 12pt; font-family: Arial, sans-serif;">Mobile App</span><span style="font-size: 12pt; font-family: Helvetica, sans-serif;"> or
            otherwise by contacting us. Provided that you request us to assist you in such
            deactivation, we will do our best to respond to your request in an appropriate
            period of time. However, please bear in mind that once your account is
            deactivated, you will not be able to access many of the services.</span></li><li style="text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Helvetica, sans-serif;">Record keeping:</span></b><span style="font-size: 12pt; font-family: Helvetica, sans-serif;"> Please bear in mind that we may need to retain certain information for our recordkeeping purposes and/or to realize any transactions that you began prior to requesting a change or deletion. That retained information will remain within our databases and/or other records.</span></li></ul>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">9. <u>THIRD PARTY APPLICATIONS</u></span></b><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">Our Mobile App may contain links to third party mobile apps, websites or services, which are not under our operation or control. Accordingly, this Policy does not apply to any Mobile App or service operated by any third party. Provided that you click on or by other means visit the third party applications, you will leave our Mobile App and enter into the third party applications where you will be subject to their private policy and terms. We encourage you to read their policy carefully, and we also are not responsible for any policy or practices conducted by third party.<o:p></o:p></span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b style="text-indent: -0.25in; font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">10.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;"> </span></span></b><b style="text-indent: -0.25in; font-size: 1rem;"><u><span style="font-size: 12pt; font-family: Arial, sans-serif;">FUTURE CHANGE OF THIS PRIVACY POLICY</span></u></b><b style="font-size: 1rem;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">We reserve the rights, at our sole discretion, to modify this Policy at any time. We will provide prior notification of this modification on our Mobile App and it is your own responsibility to review and observe our Policy periodically to keep yourself updated with any modifications. A modification shall become effective from the date as specified in the notification. By using or continuing to use this Mobile App after the effective date you agree to be bound by the modification. Should you object to any of our revised Terms, you shall immediately cease to use our Mobile App.</span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p>&nbsp;</o:p></span></b></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><!--[if !supportLists]--><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;11.<span style="font-variant-numeric: normal; font-variant-east-asian: normal; font-weight: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;"> </span></span></b><!--[endif]--><b><u><span style="font-size: 12pt; font-family: Arial, sans-serif;">INQUIRIES, SPECIAL REQUESTS OR ASSISTANCE NEEDED</span></u></b><span style="font-family: Arial, sans-serif; font-size: 12pt;">&nbsp;</span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-size: 12pt; font-family: Arial, sans-serif;">If you have any inquiry, special request or assistance with regard to this policy, please feel free to contact us via (+855) 85 813 777. Our team will promptly respond to and/or take appropriate measure to respond to your request in a reasonable period of time.</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><i><span style="font-size:12.0pt;font-family:&quot;Arial&quot;,sans-serif;color:#002060"><o:p>&nbsp;<br></o:p></span></i></p>',
            'field' => self::SUMMERNOTE,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'terms_and_conditions_kh'], [
            'name' => 'ល័ក្ខខ័ណ្ឌ',
            'description' => 'ល័ក្ខខ័ណ្ឌ',
            'field' => self::SUMMERNOTE,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'terms_and_conditions_en'], [
            'name' => 'Terms & Conditions',
            'description' => 'Terms & Conditions',
            'value' => '<p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;1. <u>IMPORTANT &amp; MUST READ<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            You shall and are advised to read our Terms &amp; Conditions (herein called the "Terms") carefully before continuing to use our Mobile Application (Mobile App). All Terms shall govern the use of our Mobile App and apply to all users and recipients of this Mobile App. By accessing or continuing to use this Mobile App, you unconditionally consent to all these Terms. All these Terms are meant to protect all of our Mobile App users and recipients, and your use of this Mobile App signifies your agreement with these Terms. IF YOU DO NOT AGREE WITH ANY OF THESE TERMS, DO NOT USE THIS MOBILE APP.
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;2. <u>OUR RESERVATIONS<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            Z1 App (herein called "We", "Us" or "Our") reserves the right, in our sole discretion, to modify, alter or otherwise update any of these Terms at any time. Such amendments shall be effective immediately upon posting. By using or continuing to use this Mobile App after our notice of such modifications you agree to be bound by such revised Terms. Should you object to any of our revised Terms, you shall immediately cease to use our Mobile App.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><br></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;3. <u>INTELLECTUAL PROPERTY<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            All contents and objects on this Mobile App, including but not limited to, texts, images, audio records, video clips, trademarks, or other applicable objects, are protected by Cambodian intellectual property laws. Those intellectual properties may be owned by us or by Third Party. You may only use these materials for private and non-commercial purposes as permitted under Cambodian laws. You are not allowed to reproduce, republish, post and/or exploit in whole or in part in whatever format any of our content or information without our prior consent. A prerequisite written permission must be obtained from us or from the owner(s) for any use for other purposes than the above exceptions as permitted under Cambodian laws or otherwise you shall be held directly liable for such violations. </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span><br></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;4. <u>TERMS OF USE AND PROHIBITION<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            You must use our Mobile App in accordance with the Terms and Conditions for lawful purposes only. You are prohibited from assessing or using of our Mobile App, including but not limit, to: </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            (a) carry out any action that imposes an unreasonable or disproportionately large load or make excessive traffic demands on the Mobile App\'s infrastructure, such as spam or other similar tool; </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            (b) disclose or share the passwords and/or confirmation numbers with any unauthorized third parties for any unauthorized use or purpose; </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            (c) attempt to disembody or disassemble the software or programming code forming one part or the whole part of this Mobile App;
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">(d) upload, post, email or otherwise transmit any information, content, or proprietary rights that you are not entitled to do so under Cambodian laws; </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            (e) use any software or other technology to, whether through manual process or automated device, copy, steal, retrieve, scrape or carry out other illegal acts on our Mobile App or its content without our prior written permission;
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">(f) use any software or other technology to, whether through manual process or automated device, interfere or attempt to interfere in whatever forms with the functioning of our Mobile App, including but not limit to transmission of viruses, worms, defects, Trojan horses or other tools of destructive nature; </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            (g) use our Mobile App or any content from our Mobile App in any manner which is, in our sole discretion, not reasonable and / or not for the purpose which it is made for;
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">(h) violate our intellectual property rights including copyright, trade secret or any other rights that we are entitled to; and
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">(i) Illegally login or attempt to login to steal passwords, personal information or other authorized items in violation of any Terms imposed by us or any applicable law.
            If you breach any of the above prohibited acts, we reserve the right to take all measures deemed necessary to prevent and repress unauthorized access to or misuse of our Mobile App, including but not limited to, technological, administrative and legal approaches. </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span><br></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;5. <u>CONTENT, INFORMATION AND DISCLAIMER OF WARRANTIES<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            All content and information on our Mobile App is provided solely for your convenience and information only, without any warranties as to its accuracy or reliability. We do not warrant any information contained in this Mobile App, whether expressed or implied, and whether it is provided by our editor or third party.
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">For Editorial Content, it should not be regarded as advice or recommendation. You should never solely rely on our editorial content without reaching out to an expert or professional for further advice and verification.
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">For Third Party Content, we normally do not practice monitoring or inquiring about the accuracy or validity of the information provided by Third Parties. Please bear in mind that Third Party’s information does not represent our views or understandings. You should never solely rely on our third party content without reaching out to an expert or professional for further advice and verification.
            </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">All content and information do not mean to suggest, endorse, or induce any action or omission. Therefore, please be reminded that you must always seek for professional and expert advice before taking any action, otherwise you are completely assumed to act at your own risk. </span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            Neither Z1 App, nor our affiliations, directors, staff or service providers, shall be held liable for any loss or damage, whether direct or indirect, suffered by any user or recipient through relying on anything contained in or omitted from our Mobile App.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;6. <u>LINKS AND ADS<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            While using our Mobile App, you may from time to time see links, ads or other internet tools that may link you to many other Mobile Apps or content operated by third parties who may not be affiliated with us. Please bear in mind that your access to such Linked Sites is beyond our control and is governed by terms and conditions of those Mobile Apps, not our Mobile App. When you depart from our Mobile App to other Mobile Apps, you are at your own risk. We encourage you to read their terms and conditions carefully before taking any action. Also, we do not warrant any information contained in those Mobile Apps. Neither Z1 App, nor our affiliations, directors, staff or service providers, shall be held liable for any loss or damage, whether direct or indirect, suffered by any user or recipient through relying on anything contained in or omitted from the third party Mobile Apps linked from ours.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;7. <u>DISCLAIMER OF LIABILITY<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            You expressly agree to use our Mobile App at your own risk. Z1 App, our directors, staff, our affiliates, service providers, information providers, and other persons/entities involved in the production, distribution, hosting, modification, deletion, default, or omission of the information in our Mobile App shall not be held accountable and responsible to any person or entity for any direct, indirect or consequential loss, damages or claims at present or in the future, resulting from the use or reliance of information and content in our Mobile App. Should any of our disclaimer not fully comply with certain compulsory provisions of Cambodian laws, or should our breach of any implied warranty result a damage, we will do our best to rectify our terms. In case that certain claims for remedies cannot be waived by our terms, but on the other hand be compulsorily applied under Cambodian laws, only a minimum and limited liability can be resorted against us.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;8. <u>INDEMNIFICATION<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            You agree to indemnify and allow Z1 App, the information providers, and Mobile App hosting service providers, and our and their directors, staff, affiliates and agents against all losses, expenses, damages and costs, including lawyer\'s fees, resulting from any violation by you of any of the Terms or misuse of our Mobile App.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;9. <u>RIGHTS OF THIRD PARTY<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            All these Terms protect not only Z1 App, but also its information Providers, and Mobile App hosting service providers, and their directors, staff, agents and involved persons. Each of these individuals or entities shall be entitled to the right to assert and enforce all these Terms directly against you.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;11. <u>ENTIRE AGREEMENT<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            All provisions, terms, conditions and obligations referenced herein, represent the entire Agreement between Z1 App, our affiliates and you, and override any prior agreements or understandings not integrated herein. In the event that any inconsistencies exist between these Terms and any future published Terms, the newer published and valid Terms shall prevail.</span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;"><br></span></p><p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            </span></p>

            <p class="MsoListParagraph" style="margin-bottom: 0.0001pt; text-align: justify; text-indent: -0.25in; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><b><span style="font-size: 12pt; font-family: Arial, sans-serif;">&nbsp; &nbsp; &nbsp;12. <u>INQUIRIES, SPECIAL REQUESTS OR ASSISTANCE NEEDED<o:p></o:p></u></span></b></p>

            <p class="MsoNormal" style="margin-bottom: 0.0001pt; text-align: justify; line-height: normal; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">
            If you have any inquiry, special request or assistance with regard to any of these terms, please feel free to contact us via (+855) 85 813 777. Our team will promptly respond to and/or take appropriate measure to respond to your request in a reasonable period of time.
            </span></p>',
            'field' => self::SUMMERNOTE,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'contact_agent'], [
            'name' => 'Contact Agent',
            'description' => 'Contact Agent',
            'value' => '+855 85 813 777',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        $version = '0.0.1';
        Setting::firstOrCreate(['key' => 'ios_version'], [
            'name' => 'IOS Mobile App Version',
            'description' => 'IOS Mobile App Version',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'ios_build'], [
            'name' => 'IOS Mobile App Build',
            'description' => 'IOS Mobile App Build',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'ios_link'], [
            'name' => 'IOS Mobile App Link',
            'description' => 'IOS Mobile App Link',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'android_version'], [
            'name' => 'Android Mobile App Version',
            'description' => 'Android Mobile App Version',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'android_build'], [
            'name' => 'Android Mobile App Build',
            'description' => 'Android Mobile App Build',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'android_link'], [
            'name' => 'Android Mobile App Link',
            'description' => 'Android Mobile App Link',
            'value' => $version,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'vtrust_account_3'], [
            'name' => 'VTrust-3',
            'description' => 'VTrust-3',
            'value' => NULL,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);

        Setting::firstOrCreate(['key' => 'vtrust_account_4'], [
            'name' => 'VTrust-4',
            'description' => 'VTrust-4',
            'value' => NULL,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'role_6'], [
            'name' => 'Zillionholding',
            'description' => 'Zillionholding Role',
            'value' => '6,5,4,3',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'role_8'], [
            'name' => 'VTrust',
            'description' => 'VTrust Role',
            'value' => '10,9,8,7',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'role_7'], [
            'name' => 'VTrust-Bank-HQ',
            'description' => 'VTrust-Bank-HQ',
            'value' => '10,9,7',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'role_9'], [
            'name' => 'CBC-Roles',
            'description' => 'Roles for CBC',
            'value' => '12,13,15,16',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'banner_z1'], [
            'name' => 'Z1 banner Youtube',
            'description' => 'Z1 banner Youtube',
            'value' => null,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'z1_link_youtube'], [
            'name' => 'Z1 News Youtube channel link Youtube',
            'description' => 'Z1 News Youtube channel Youtube',
            'value' => null,
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'datatime_for_compare_created_at'], [
            'name' => 'Data time to compare with created date of property for request new indication',
            'description' => 'Data time to compare with created date of property for request new indication',
            'value' => '2021-01-29 09:30:00',
            'field' => self::SUMMERNOTE,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'defualt_location_distance'], [
            'name' => 'Default Location Distance For Api Search',
            'description' => 'Default Location Distance For Api Search',
            'value' => '2',
            'field' => self::SUMMERNOTE,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'customer_support'], [
            'name' => 'Customer support',
            'description' => 'Customer support',
            'value' => '+855 85 716 777',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'condition_date_available_private_listing'], [
            'name' => 'Condition Date Available Private Listing',
            'description' => 'Condition Date Available Private Listing',
            'value' => '2021-03-19',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'app_map_type'], [
            'name' => 'Maps type',
            'description' => 'Type can be (terrain, satellite and normal)',
            'value' => 'satellite',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'property_poi_per_page'], [
            'name' => 'Property POI Per Page',
            'description' => 'Number of entries to retrieve per page.',
            'value' => '50',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'property_poi_in_kilometer'], [
            'name' => 'Property POI in Kilometer',
            'description' => 'POI in Kilometer',
            'value' => '1',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'property_poi_sort'], [
            'name' => 'Property POI data sort',
            'description' => 'POI data sort',
            'value' => 'asc',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'all_crud_list_scrollbar_option'], [
            'name' => 'All crud scrollbar options',
            'description' => 'All crud scrollbar options',
            'value' => 'property,lead,deal,taskactivity,contract,crmcase,contact,account,listing,mylisting,release,review,my-notification', // contact,submitcase
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'reports_enable'], [
            'name' => 'Enable reports',
            'description' => 'For report show',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'dashboard_enable'], [
            'name' => 'Enable Dashboard',
            'description' => 'Dashboard enable',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'leaflet_map_zoom_level'], [
            'name' => 'Zoom level for leaflet map',
            'description' => 'Zoom level for leaflet map',
            'value' => '17',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'dashboard_data_refresh_schedule'], [
            'name' => 'Schedule for for refresh data on dashboard',
            'description' => 'Schedule for for refresh data on dashboard',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'dashboard_show_or_hide_refresh_data'], [
            'name' => 'Dashboard button refresh data display',
            'description' => 'Dashboard button refresh data display',
            'value' => '1',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'property_maps_per_page'], [
            'name' => 'Property Maps properties per page',
            'description' => 'Property Maps properties per page',
            'value' => '2000',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'z1_mobile_poi_distance'], [
            'name' => 'Z1App POI distance',
            'description' => 'For mobile app to config on distance to get nearby facilities.',
            'value' => '1',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'access_road_distance'], [
            'name' => 'Access road distance',
            'description' => 'Access road distance',
            'value' => '50',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'access_max_match'], [
            'name' => 'Access road max match',
            'description' => 'Access max match',
            'value' => '3',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'six_month'], [
            'name' => 'Six month',
            'description' => 'Six month',
            'value' => '+6 month',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'old_dashboard'], [
            'name' => 'To use old dashboard UI',
            'description' => 'To use old dashboard UI',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'enable_create_order'], [
            'name' => 'Enable create order',
            'description' => 'To enable create order on object create.',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'z1payment_oauth_token'], [
            'name' => 'Z1 payment token',
            'description' => 'Token use for create order on z1payment.',
            'field' => self::TEXTFIELD,
            'active' => 1,
            'value' => 'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiNDBmNmYzYzk3OTA4OTdkZDQ0YmFlZDk2Mzg0ZWIwYzliY2RmZTJlNmMyNDllZGQxODg1N2MzYzVjMzE0ZTZmZjUzNDc1NzA4ODMxYjg3NzciLCJpYXQiOjE2MjIxODI1NzMuNTcwODg3LCJuYmYiOjE2MjIxODI1NzMuNTcwODkxLCJleHAiOjE2ODIxODI1NzMuNTYzOTA3LCJzdWIiOiI2MyIsInNjb3BlcyI6W119.JosPSJK7sAKuZADduF9Y7a15Ll-2ZtiT0LPhht_cacP8PUXVSVIkUtq2NLrhYWeYMo6iJ35YmXQTDVCqAINqT8lcXQL5uFnj-1dIe41SaV6uCmMOo4Zv4d3qZEOzITVwHI0RFSt1LGJ3uJJkC3MQt1FzSMd1Xnb90Qm4X-GS6cbEv-oKVHKbrDACz9p9XxC-v0vFGn85XQnM72x_FviNqSvbNMXL5clOdL_W4CjcKEKFWuQZEKX0lp4llqFblQSy9aQs8OQCp_AE_g8QC3b6TlopF7rf_pBPAuz7DMqEumGxTIhGaLQLxTqcgbCQenYIhOgiDfgy918i3Z3qYY4tOUnBFyGT0TU0x_HECB6LFosq1Y2PVqlT9Vh0yGH7TITRigV1iBLhK7o1kcarASAhqx0I6qRfQt5nqT2Lk9i9qVC1r4tVfXmom6zwnd1PcH6Jp7Vtwl2wlvKrjYjKBaFd9Kfmf0308uZQ3OhDdDi5vY6xiV2HHNcwgURHogA08ClYr6CASasyzXkPsmTG0zebFSQE4-vGO1PNoNGJxsm7jE5ios3ruk7xtCnsODzkPKXZnipbdc7igyMRWEwVqaFlN0IcF3sSMuXLkIuDwehQNIlrJB_CosP2qNRrcjJllLntDkiRrHkp0282dVuJlps2XqTo3WbJ6mqbyzVD-PJJV6g'
        ]);
        Setting::firstOrCreate(['key' => 'z1payment_oauth_credentials'], [
            'name' => 'Z1 payment oauth credentials',
            'description' => 'Credentials for getting token on z1payment',
            'value' => '[{"partner_id": "KT000123","partner_secret_key": "UOtJmOlHEqdvEpEF","email":"lovsokheang@gmail.com","password":"Not4youbro"}]',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'notification_translation_value_keys'], [
            'name' => 'Keys for notification translation value',
            'description' => 'Key field has to be match with key in Notification Translate, name field meaning "Test::TEST" => "ButtonName::ValueToInsert". Ex: "Test::TEST,TESTING::Testing"',
            'value' => '',
            'field' => '{"name":"value","label":"Value","type":"table","columns":{"key":"Key","name":"Name"},"min":"0"}',
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'middleware_public_ip_address'], [
            'name' => 'Partner will access via api key and locked on public ip.',
            'description' => 'Partner will access via api key and locked on public ip.',
            'value' => '*,192.168.1.1, 127.0.0.1',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'two_factor_enable'], [
            'name' => 'Enable two factor',
            'description' => 'For enable two factor',
            'value' => '0',
            'field' => self::TEXTFIELD,
            'active' => 1
        ]);
        Setting::firstOrCreate(['key' => 'z1_help_link'], [
            'name'      => 'Z1 Help Link',
            'description' => 'A "Z1 Help" menu inside the "Me" page where we can put any link and be able to change it in the future.',
            'value'     => 'https://www.youtube.com/watch?v=mAgUp5HCXHQ&ab_channel=Z1News',
            'field'     => self::TEXTFIELD,
            'active'    => 1
        ]);

        Setting::firstOrCreate(['key' => 'disclaimer_kh'], [
            'name' => 'ការបដិសេធ',
            'description' => 'ការបដិសេធចំពោះ v-trust',
            'field' => self::SUMMERNOTE,
            'active' => 1,
            'value' => '<p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">អតិថិជនទំាងអស់ធានាអះអាងថាខ្លួនគឺជាម្ចាស់កម្មសិទ្ធិ ឬបានទទួលសិទ្ធិស្របច្បាប់ពីសំណាក់ម្ចាស់អចលនវត្ថុ ក្នុងការស្នើសុំរបាយការណ៏វាយតម្លៃ ។ អតិថិជនទំាងអស់ធានាអះអាងថាព័ត៌មានដែលខ្លួនបានផ្ដល់ជូនសម្រាប់វាយតម្លៃគឺពិតជាត្រឹមត្រូវ និងអាចយកជាការបាន ។ អតិថិជនត្រូវទទួលខុសត្រូវទំាងស្រុងចំពោះការប្រើប្រាស់របាយការណ៏វាយតម្លៃ ដែលចេញដោយក្រុមហ៊ុន ។ ក្នុងករណីដែលមានវិវាទពាក់ព័ន្ធនឹងការប្រើប្រាស់របាយការណ៏វាយតម្លៃ ឬភាពត្រឹមត្រូវនៃព័ត៌មានដែលផ្ដល់ជូនដើម្បីធ្វើការវាយតម្លៃ នោះអតិថិជនត្រូវទទួលខុសត្រូវដោយឯកឯង ។ ក្រុមហ៊ុន V-TRUST មិនទទួលខុសត្រូវចំពោះរាល់ការខាតបង់ ឬការខូចខាតណាមួយ ដែលកើតចេញពីការប្រើប្រាស់របាយការណ៏វាយតម្លៃ ឬការផ្ដល់ព័ត៌មានមិនត្រឹមត្រូវសម្រាប់ស្នើសុំការវាយតម្លៃឡើយ</span></p>',
        ]);

        Setting::firstOrCreate(['key' => 'disclaimer_en'], [
            'name' => 'Disclaimer',
            'description' => 'Disclaimer for v-trust',
            'field' => self::SUMMERNOTE,
            'active' => 1,
            'value' => '<p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">All customers shall ensure that the property requested for indication is a lawful property owned by the customer or duly agreed to be indicated by the property owner.&nbsp;</span></p>
                        <p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\">&nbsp;</p>
                        <p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">In addition, customers shall ensure the property information provided for valuation is accurate and reliable. Customers accept that they shall take full responsibility for the use of indication issued by V-trust. In case there is any dispute arising from the use of indication, or accuracy or reliability of information provided for indication, Customers shall be solely responsible.&nbsp;</span></p>
                        <p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\">&nbsp;</p>
                        <p style=\"\\&quot;line-height:1.2;margin-top:0pt;margin-bottom:0pt;\\&quot;\"><span id=\"docs-internal-guid-5b3020f7-7fff-148a-adbb-68f871c2dbe4\"></span></p>
                        <p style=\"line-height:1.656;background-color:#ffffff;margin-top:0pt;margin-bottom:0pt;\"><span style=\"font-size:12pt;font-family:Arial;color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">V-trust does not accept any liability for any loss or damage which may arise directly or indirectly from the use of indication by the customers or inaccuracy of property information provided for valuation.</span></p>
            </span>',
        ]);
    }
}
