<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Initiative;
use App\Models\Law;
use App\Models\Outreach;
use App\Models\Page;
use App\Models\Partner;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pages = [
            [
                'type'  => 1,
                'photo' => 'bg-header-page.png',
                'en' => [
                    'name'              => 'Incorporation',
                    'meta_title'        => 'Incorporation',
                    'meta_description'  => 'Incorporation',
                    'meta_keywords'     => 'Incorporation',
                    'name'              => 'Incorporation',
                    'slug'              => 'Incorporation',
                    'title'             => 'Incorporation',
                    'brief'             => 'Incorporation',
                    'description' => '<h2>Trusted Cab Services in All World</h2><p>Curabitur placerat cursus nisi nec pharetra. Proin quis tortor fringilla, placerat nisi nec, auctor ex. Donec commodo orci ac lectus mattis, sed interdum sem scelerisque. Vivamus at euismod magna. Aenean semper risus nec dolor bibendum cursus. Donec eu odio eu ligula sagittis fringilla. Phasellus vulputate velit eu vehicula auctor. Nam vel pellentesque libero. Duis eget efficitur dui. Mauris tempor ex non tortor aliquet, et interdum mi dapibus. Phasellus ac dui nunc. Sed quis sagittis lorem, in blandit nibh. Fusce dui metus, interdum ac malesuada eu, ornare nec neque. Fusce hendrerit, tortor id egestas rutrum, orci lorem lacinia velit, sed mollis augue diam eget ipsum. Curabitur euismod, tellus sit amet tincidunt semper, dui odio pharetra orci, sed molestie odio libero sed libero. Sed volutpat ornare mauris. Sed gravida pulvinar urna, eget euismod mi mattis a. Vivamus sagittis eu quam sed ullamcorper. Etiam aliquet ornare tempus. Maecenas dictum nunc ac tortor rutrum, quis sollicitudin libero feugiat. Mauris iaculis sed risus ut tempus.</p>',
                ],
                'ar' => [
                    'name'              => 'التآسيس',
                    'meta_title'        => 'التآسيس',
                    'meta_description'  => 'التآسيس',
                    'meta_keywords'     => 'التآسيس',
                    'name'              => 'التآسيس',
                    'slug'              => 'التآسيس',
                    'title'             => 'التآسيس',
                    'brief'             => 'التآسيس',
                    'description' => '<h2><strong><span style="color:#3498db">| التأسيس</span></strong></h2>

                    <p>تأسست جمعية حماية المستثمرين الأفراد في عام 2020م، بموافقة وزارة الموارد البشرية والتنمية الاجتماعية. ويتميز أعضاؤها المؤسسين بالخبرة والمعرفة القانونية والمالية.</p>

                    <p><span style="color:#3498db"><span style="font-size:16px"><strong>| غرضها</strong></span></span></p>

                    <p>تعتبر أول جمعية تعنى بحماية المستثمرين الأفراد في السوق المالية السعودية.</p>

                    <p><span style="color:#3498db"><span style="font-size:16px"><strong>| منطلقات تأسيسها</strong></span></span></p>

                    <p>انطلاقاً من برنامج &ldquo;تطوير القطاع المالي&rdquo; أحد البرامج التنفيذية لتحقيق رؤية المملكة 2030، وضمن الخطة الاستراتيجية لهيئة السوق المالية السعودية 2021-2023، ستقدم الجمعية الحماية للمستثمرين الأفراد في السوق المالية السعودية في عدة جوانب أهمها الجانب التوعوي والقانوني.</p>

                    <p><span style="display:none">&nbsp;</span><span style="color:#3498db"><span style="font-size:16px"><strong>| الصفة الاعتبارية</strong></span></span></p>

                    <p>كيان مُستقل مُرخص وغير ربحي مدعوم من الجهات التشريعية.</p>

                    <p><span style="color:#3498db"><span style="font-size:16px"><strong>| الرؤية</strong></span></span></p>

                    <p>رفع مستوى وعي المستثمرين الأفراد بما يساهم في تعزيز أداء السوق المالية السعودية.</p>

                    <p><span style="color:#3498db"><span style="font-size:16px"><strong>| الرسالة</strong></span></span></p>

                    <p>رفع ثقة المستثمرين الأفراد وتعظيم منفعة تداولاتهم من خلال تقديم الدعم و الاستشارات القانونية ورفع وعي المستثمر الفرد بكافة حقوقه والتزاماته في تعاملات السوق المالية.</p>
                    ',
                ],
            ],
            [
                'type'  => 1,
                'photo' => 'bg-header-page.png',
                'en' => [
                    'name'              => 'Our Goals',
                    'meta_title'        => 'Our Goals',
                    'meta_description'  => 'Our Goals',
                    'meta_keywords'     => 'Our Goals',
                    'name'              => 'Our Goals',
                    'slug'              => 'our-goals',
                    'title'             => 'Our Goals',
                    'brief'             => 'Our Goals',
                    'description' => '<p>وفق استراتيجية الأعمال لجمعية حماية المستثمرين الأفراد تم التركيز على هدفين استراتيجيين، تُبنى على أساسه كل الأهداف الفرعية والتشغيلية:</p>

                    <p>أولاً :</p>

                    <p>تمكين المستثمرين الأفراد معرفياً ودعمهم بالاستشارات القانونية لرفع مستوى وعيهم بالسوق المالية وأنظمته وقوانينه وحقوقهم وواجباتهم بما يساهم في رفع قدراتهم ومهارتهم في التداول والتعاملات المختلفة المرتبطة بالسوق المالية السعودية.</p>

                    <p>ثانياً:</p>

                    <p>المساهمة في تطوير السوق المالية السعودية لسوق متقدمة من خلال التكامل مع الجهات الحكومية لرفع شفافية السوق وتعزيز موثوقيتها وتحقيق مستهدفات برنامج تطوير القطاع المالي من خلال تحفيز مفاهيم الادخار والتمويل والاستثمار.</p>

                    <p><span style="color:#3498db"><strong><span style="font-size:16px">| دور الجمعية</span></strong></span></p>

                    <p>1- رفع الوعي المالي والقانوني للمستثمرين الأفراد وتطوير المستوى المعرفي لهم.</p>

                    <p>2- تقديم المشورة والمساعدة القانونية للأعضاء والمستثمرين الافراد.</p>

                    <p>3- التعاون مع الجهات الرقابية لدعم قضايا المستثمرين الأفراد المتضررين والمساهمة في حمايتهم</p>

                    <p>4- التكامل مع الجهات الرقابية لفهم وتحليل أداء الشركات المدرجة والمؤسسات المالية.</p>

                    <p>5- تحليل وتقييم الأنظمة واللوائح السياسات والتشريعات المؤثرة على المستثمرين الأفراد وتقديم المقترحات والتوصيات اللازمة لهم.</p>
                    ',
                ],
                'ar' => [
                    'name'              => 'اهداف الجمعية',
                    'meta_title'        => 'اهداف الجمعية',
                    'meta_description'  => 'اهداف الجمعية',
                    'meta_keywords'     => 'اهداف الجمعية',
                    'name'              => 'اهداف الجمعية',
                    'slug'              => 'اهداف-الجمعية',
                    'title'             => 'اهداف الجمعية',
                    'brief'             => 'اهداف الجمعية',
                    'description' => '<p>وفق استراتيجية الأعمال لجمعية حماية المستثمرين الأفراد تم التركيز على هدفين استراتيجيين، تُبنى على أساسه كل الأهداف الفرعية والتشغيلية:</p>

                    <p>أولاً :</p>

                    <p>تمكين المستثمرين الأفراد معرفياً ودعمهم بالاستشارات القانونية لرفع مستوى وعيهم بالسوق المالية وأنظمته وقوانينه وحقوقهم وواجباتهم بما يساهم في رفع قدراتهم ومهارتهم في التداول والتعاملات المختلفة المرتبطة بالسوق المالية السعودية.</p>

                    <p>ثانياً:</p>

                    <p>المساهمة في تطوير السوق المالية السعودية لسوق متقدمة من خلال التكامل مع الجهات الحكومية لرفع شفافية السوق وتعزيز موثوقيتها وتحقيق مستهدفات برنامج تطوير القطاع المالي من خلال تحفيز مفاهيم الادخار والتمويل والاستثمار.</p>

                    <p><span style="color:#3498db"><strong><span style="font-size:16px">| دور الجمعية</span></strong></span></p>

                    <p>1- رفع الوعي المالي والقانوني للمستثمرين الأفراد وتطوير المستوى المعرفي لهم.</p>

                    <p>2- تقديم المشورة والمساعدة القانونية للأعضاء والمستثمرين الافراد.</p>

                    <p>3- التعاون مع الجهات الرقابية لدعم قضايا المستثمرين الأفراد المتضررين والمساهمة في حمايتهم</p>

                    <p>4- التكامل مع الجهات الرقابية لفهم وتحليل أداء الشركات المدرجة والمؤسسات المالية.</p>

                    <p>5- تحليل وتقييم الأنظمة واللوائح السياسات والتشريعات المؤثرة على المستثمرين الأفراد وتقديم المقترحات والتوصيات اللازمة لهم.</p>
                    ',
                ],
            ],
            [
                'type'  => 1,
                'photo' => 'bg-header-page.png',
                'image' => 'organizational-structure.png',
                'en' => [
                    'name'              => 'Organizational Structure',
                    'meta_title'        => 'Organizational Structure',
                    'meta_description'  => 'Organizational Structure',
                    'meta_keywords'     => 'Organizational Structure',
                    'name'              => 'Organizational Structure',
                    'slug'              => 'organizational-structure',
                    'title'             => 'Organizational Structure',
                    'brief'             => 'Organizational Structure',
                    'description' => '<img src="http://localhost/uploads/images/original/organize-structure.png" alt="Organizational Structure" />',

                ],
                'ar' => [
                    'name'              => 'الهيكل التنظيمي',
                    'meta_title'        => 'الهيكل التنظيمي',
                    'meta_description'  => 'الهيكل التنظيمي',
                    'meta_keywords'     => 'الهيكل التنظيمي',
                    'name'              => 'الهيكل التنظيمي',
                    'slug'              => 'الهيكل التنظيمي',
                    'title'             => 'الهيكل التنظيمي',
                    'brief'             => 'الهيكل التنظيمي',
                    'description' => '<img src="http://localhost/uploads/images/original/organize-structure.png" alt="Organizational Structure" />',


                ],
            ],
            [
                'type'  => 1,
                'photo' => 'bg-header-page.png',
                'en' => [
                    'name'              => 'How to file a class action',
                    'meta_title'        => 'How to file a class action',
                    'meta_description'  => 'How to file a class action',
                    'meta_keywords'     => 'How to file a class action',
                    'name'              => 'How to file a class action',
                    'slug'              => 'How-to-file-a-class-action',
                    'title'             => 'How to file a class action',
                    'brief'             => 'How to file a class action',
                    'description' => '<p>في إطار سعي هيئة السوق المالية &ldquo;الهيئة&rdquo; المستمر إلى تطوير السوق المالية في المملكة وحماية المستثمرين فيها، وتعزيز آليات تعويض المستثمرين وتيسير إجراءات التقاضي للمتعاملين في السوق المالية بما يكفل حصول المتضررين على تعويضاتهم بأسرع وقت وبأيسر آلية ممكنة، وبناء على نظام السوق المالية الصادر بالمرسوم الملكي رقم (م/30) وتاريخ 1424/2/6هـ، أصدر مجلس الهيئة قراره المتضمن اعتماد تعديل لائحة إجراءات الفصل في منازعات الأوراق المالية &ldquo;اللائحة&rdquo;، وذلك بإضافة باب تنظيم الدعوى الجماعية الذي تم نشره على موقعها الإلكتروني.</p>

<p>ويهدف تنظيم الدعوى الجماعية ضمن&nbsp;اللائحة&nbsp;إلى تيسير إجراءات التقاضي في الدعاوى التي يكون المدعي فيها مجموعة كبيرة من الأشخاص يشتركون جميعاً في ذات المسائل النظامية والوقائع المدعى بها، وهو الأمر الذي يتناسب مع طبيعة شركات المساهمة المدرجة وحجم المساهمين فيها. كما أن هذا التعديل يرمي إلى تطوير آليات التقاضي وإجراءاته بما ينسجم مع أفضل الممارسات الدولية، وبما يعزز من جاذبية السوق المالية السعودية ويقلل من مخاطر الاستثمار فيها، بالإضافة إلى دوره في تقليص المدد الزمنية اللازمة للبت في قضايا تعويض المستثمرين بما ييسر عمل اللجان من جهة ويركز جهود المستثمرين من جهة أخرى.</p>

<p>&nbsp;</p>

<p>ويمكن الاطلاع على اللائحة المعدلة على موقع الهيئة من خلال:</p>

<p><a href="https://cma.org.sa/RulesRegulations/Regulations/Documents/RSDPR_ar.pdf">لائحة إجراءات الفصل في منازعات الأوراق المالية&nbsp;</a></p>

<p><br />
كما يمكن الاطلاع على&nbsp;العرض التقديمي الخاص&nbsp;بالدعوى الجماعية من خلال:</p>

<p><a href="https://cma.org.sa/Awareness/Publications/DocLib1/Presentation1.pdf" rel="noopener" target="_blank">العرض التقديمي للدعوى الجماعية</a></p>

<p>&nbsp;</p>

<p><strong>تقديم طلب انضمام لدعوى جماعية</strong></p>

<p>&nbsp;</p>

<p>تستقبل هيئة السوق المالية طلبات الانضمام لدعوى جماعية التي تقع في نطاق أحكام نظام السوق المالية ولوائحه التنفيذية، والنظر فيها ودراستها والتحقق من صحتها، وإحالتها إلى اللجنة.</p>

<p><br />
&nbsp;</p>

<p><strong>كيف يتم&nbsp; تقديم طلب انضمام لدعوى جماعية إلى الهيئة</strong></p>

<ul>
	<li>
	<p>من خلال موقع الهيئة الإلكتروني.</p>
	</li>
	<li>
	<p>مقر هيئة السوق المالية طريق الملك فهد الدور الأرضي، مكتب حماية المستثمر.</p>
	</li>
</ul>

<p>&nbsp;</p>

<p><strong>المستندات الواجب إرفاقها مع طلب الانضمام لدعوى جماعية</strong></p>

<ul>
	<li>للأفراد صورة من بطاقة الهوية الوطنية للسعوديين ومواطني دول الخليج العربي، أو صورة من هوية مقيم لغير السعوديين، أو صورة من جواز السفر للمقيمين خارج المملكة، بالنسبة للمؤسسات والشركات صورة من السجل التجاري وأن تكون الشكوى موقعة من الشخص المفوض، (لن ينظر أو تستكمل إجراءات معالجة طلب الانضمام في حالة عدم إرفاقها).</li>
	<li>صورة من الوكالة الشرعية والهوية الوطنية للوكيل الشرعي.</li>
	<li>صورة من المستندات المؤيدة لطلب الانضمام.&nbsp;</li>
</ul>
',
                ],
                'ar' => [
                    'name'              => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_title'        => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_description'  => 'شرح كيفية تقديم دعوة جماعية',
                    'meta_keywords'     => 'شرح كيفية تقديم دعوة جماعية',
                    'name'              => 'شرح كيفية تقديم دعوة جماعية',
                    'slug'              => 'شرح كيفية تقديم دعوة جماعية',
                    'title'             => 'شرح كيفية تقديم دعوة جماعية',
                    'brief'             => 'شرح كيفية تقديم دعوة جماعية',
                    'description' => '<p>في إطار سعي هيئة السوق المالية &ldquo;الهيئة&rdquo; المستمر إلى تطوير السوق المالية في المملكة وحماية المستثمرين فيها، وتعزيز آليات تعويض المستثمرين وتيسير إجراءات التقاضي للمتعاملين في السوق المالية بما يكفل حصول المتضررين على تعويضاتهم بأسرع وقت وبأيسر آلية ممكنة، وبناء على نظام السوق المالية الصادر بالمرسوم الملكي رقم (م/30) وتاريخ 1424/2/6هـ، أصدر مجلس الهيئة قراره المتضمن اعتماد تعديل لائحة إجراءات الفصل في منازعات الأوراق المالية &ldquo;اللائحة&rdquo;، وذلك بإضافة باب تنظيم الدعوى الجماعية الذي تم نشره على موقعها الإلكتروني.</p>

<p>ويهدف تنظيم الدعوى الجماعية ضمن&nbsp;اللائحة&nbsp;إلى تيسير إجراءات التقاضي في الدعاوى التي يكون المدعي فيها مجموعة كبيرة من الأشخاص يشتركون جميعاً في ذات المسائل النظامية والوقائع المدعى بها، وهو الأمر الذي يتناسب مع طبيعة شركات المساهمة المدرجة وحجم المساهمين فيها. كما أن هذا التعديل يرمي إلى تطوير آليات التقاضي وإجراءاته بما ينسجم مع أفضل الممارسات الدولية، وبما يعزز من جاذبية السوق المالية السعودية ويقلل من مخاطر الاستثمار فيها، بالإضافة إلى دوره في تقليص المدد الزمنية اللازمة للبت في قضايا تعويض المستثمرين بما ييسر عمل اللجان من جهة ويركز جهود المستثمرين من جهة أخرى.</p>

<p>&nbsp;</p>

<p>ويمكن الاطلاع على اللائحة المعدلة على موقع الهيئة من خلال:</p>

<p><a href="https://cma.org.sa/RulesRegulations/Regulations/Documents/RSDPR_ar.pdf">لائحة إجراءات الفصل في منازعات الأوراق المالية&nbsp;</a></p>

<p><br />
كما يمكن الاطلاع على&nbsp;العرض التقديمي الخاص&nbsp;بالدعوى الجماعية من خلال:</p>

<p><a href="https://cma.org.sa/Awareness/Publications/DocLib1/Presentation1.pdf" rel="noopener" target="_blank">العرض التقديمي للدعوى الجماعية</a></p>

<p>&nbsp;</p>

<p><strong>تقديم طلب انضمام لدعوى جماعية</strong></p>

<p>&nbsp;</p>

<p>تستقبل هيئة السوق المالية طلبات الانضمام لدعوى جماعية التي تقع في نطاق أحكام نظام السوق المالية ولوائحه التنفيذية، والنظر فيها ودراستها والتحقق من صحتها، وإحالتها إلى اللجنة.</p>

<p><br />
&nbsp;</p>

<p><strong>كيف يتم&nbsp; تقديم طلب انضمام لدعوى جماعية إلى الهيئة</strong></p>

<ul>
	<li>
	<p>من خلال موقع الهيئة الإلكتروني.</p>
	</li>
	<li>
	<p>مقر هيئة السوق المالية طريق الملك فهد الدور الأرضي، مكتب حماية المستثمر.</p>
	</li>
</ul>

<p>&nbsp;</p>

<p><strong>المستندات الواجب إرفاقها مع طلب الانضمام لدعوى جماعية</strong></p>

<ul>
	<li>للأفراد صورة من بطاقة الهوية الوطنية للسعوديين ومواطني دول الخليج العربي، أو صورة من هوية مقيم لغير السعوديين، أو صورة من جواز السفر للمقيمين خارج المملكة، بالنسبة للمؤسسات والشركات صورة من السجل التجاري وأن تكون الشكوى موقعة من الشخص المفوض، (لن ينظر أو تستكمل إجراءات معالجة طلب الانضمام في حالة عدم إرفاقها).</li>
	<li>صورة من الوكالة الشرعية والهوية الوطنية للوكيل الشرعي.</li>
	<li>صورة من المستندات المؤيدة لطلب الانضمام.&nbsp;</li>
</ul>
',
                ],
            ],

        ];



        $partners = [
            ['logo' => 'company-1.png', 'link' => '#'],
            ['logo' => 'company-2.png', 'link' => '#'],
            ['logo' => 'company-3.png', 'link' => '#'],
        ];

        $outreachs = [
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'btn_name' => 'Lorem ipsum'
                ],
                'ar' => [
                    'meta_title' => 'كيف تقدم شكوى',
                    'meta_description' => 'كيف تقدم شكوى',
                    'meta_keywords' => 'كيف تقدم شكوى',
                    'name' => 'كيف تقدم شكوى',
                    'title' => 'كيف تقدم شكوى',
                    'brief' => 'كيف تقدم شكوى كيف تقدم شكوى',
                    'description' => 'كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى كيف تقدم شكوى',
                    'btn_name' => 'Lorem ipsum'
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'btn_name' => 'Lorem ipsum'
                ],
                'ar' => [
                    'meta_title' => 'كيف تقدم بلاغ عن مخالفة',
                    'meta_description' => 'كيف تقدم بلاغ عن مخالفة',
                    'meta_keywords' => 'كيف تقدم بلاغ عن مخالفة',
                    'name' => 'كيف تقدم بلاغ عن مخالفة',
                    'title' => 'كيف تقدم بلاغ عن مخالفة',
                    'brief' => 'كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة',
                    'description' => 'كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة كيف تقدم بلاغ عن مخالفة',
                    'btn_name' => 'Lorem ipsum'
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'btn_name' => 'Lorem ipsum'
                ],
                'ar' => [
                    'meta_title' => 'دليل حماية المستثمرين',
                    'meta_description' => 'دليل حماية المستثمرين',
                    'meta_keywords' => 'دليل حماية المستثمرين',
                    'name' => 'دليل حماية المستثمرين',
                    'title' => 'دليل حماية المستثمرين',
                    'brief' => 'دليل حماية المستثمرين دليل حماية المستثمرين',
                    'description' => 'دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين دليل حماية المستثمرين',
                    'btn_name' => 'Lorem ipsum'
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'btn_name' => 'Lorem ipsum'
                ],
                'ar' => [
                    'meta_title' => 'وثيقة حقوق المستثمر',
                    'meta_description' => 'وثيقة حقوق المستثمر',
                    'meta_keywords' => 'وثيقة حقوق المستثمر',
                    'name' => 'وثيقة حقوق المستثمر',
                    'title' => 'وثيقة حقوق المستثمر',
                    'brief' => 'وثيقة حقوق المستثمر وثيقة حقوق المستثمر',
                    'description' => 'وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر وثيقة حقوق المستثمر',
                    'btn_name' => 'Lorem ipsum'
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],

        ];

        $initiatives = [
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة واعي للاستثمار الآمن',
                    'meta_description' => 'مبادرة واعي للاستثمار الآمن',
                    'meta_keywords' => 'مبادرة واعي للاستثمار الآمن',
                    'name' => 'مبادرة واعي للاستثمار الآمن',
                    'title' => 'مبادرة واعي للاستثمار الآمن',
                    'brief' => 'مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن',
                    'description' => 'مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن مبادرة واعي للاستثمار الآمن',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة مستشارك القانوني',
                    'meta_description' => 'مبادرة مستشارك القانوني',
                    'meta_keywords' => 'مبادرة مستشارك القانوني',
                    'name' => 'مبادرة مستشارك القانوني',
                    'title' => 'مبادرة مستشارك القانوني',
                    'brief' => 'مبادرة مستشارك القانوني مبادرة مستشارك القانوني',
                    'description' => 'مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني مبادرة مستشارك القانوني',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة المرصد السعودي للسوق المالية',
                    'meta_description' => 'مبادرة المرصد السعودي للسوق المالية',
                    'meta_keywords' => 'مبادرة المرصد السعودي للسوق المالية',
                    'name' => 'مبادرة المرصد السعودي للسوق المالية',
                    'title' => 'مبادرة المرصد السعودي للسوق المالية',
                    'brief' => 'مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية',
                    'description' => 'مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية مبادرة المرصد السعودي للسوق المالية',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'meta_description' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'meta_keywords' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'name' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'title' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'brief' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                    'description' => 'مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية مبادرة مركز / كرسي للدراسات الاستراتيجية للسوق المالية السعودية',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة ديوانية المستثمرين الأفراد',
                    'meta_description' => 'مبادرة ديوانية المستثمرين الأفراد',
                    'meta_keywords' => 'مبادرة ديوانية المستثمرين الأفراد',
                    'name' => 'مبادرة ديوانية المستثمرين الأفراد',
                    'title' => 'مبادرة ديوانية المستثمرين الأفراد',
                    'brief' => 'مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد',
                    'description' => 'مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد مبادرة ديوانية المستثمرين الأفراد',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
            [
                'en' => [
                    'meta_title' => 'Lorem ipsum dolor sit amet.',
                    'meta_description' => 'Lorem ipsum dolor sit amet.',
                    'meta_keywords' => 'Lorem ipsum dolor sit amet.',
                    'name' => 'Lorem ipsum dolor sit amet.',
                    'title' => 'Lorem ipsum dolor sit',
                    'brief' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                    'description' => 'Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet.',
                ],
                'ar' => [
                    'meta_title' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'meta_description' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'meta_keywords' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'name' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'title' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'brief' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                    'description' => 'مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية مبادرة مؤتمر ممارسات وقوانين السوق المالية السعودية',
                ],
                'type' => 2,
                'photo' => 'bg-card.png'
            ],
        ];

        $laws = [
            [
                'en' => [
                    'title' => 'نظام السوق المالي',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'نظام السوق المالي',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'دليل حماية المستثمر',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'دليل حماية المستثمر',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'وثيقة حماية المستثمر',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'وثيقة حماية المستثمر',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'قائمة المصطلحات المستخدمة',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'قائمة المصطلحات المستخدمة',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'لائحة اجراءات الفصل في منازعات الاوراق المالية',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'لائحة اجراءات الفصل في منازعات الاوراق المالية',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'لائحة سلوكيات السوق',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'لائحة سلوكيات السوق',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
            [
                'en' => [
                    'title' => 'التعاميم',
                    'description' => 'description'
                ],
                'ar' => [
                    'title' => 'التعاميم',
                    'description' => 'description'
                ],
                'attachment_pdf' => 'dummy.pdf'
            ],
        ];

        $directors = [
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],
            [
                'photo' => 'img-Administration.png',
                'name' => 'محمد أحمد الضبعان',
                'nickname' => 'سعادة المحامي الأستاذ',
                'job_title' => 'رئيس مجلس الإدارة'
            ],

        ];

        foreach ($pages as $page) {
            Page::create($page);
        }

        foreach ($partners as $partner) {
            Partner::create($partner);
        }

        foreach ($outreachs as $outreach) {
            Outreach::create($outreach);
        }

        foreach ($initiatives as $initiative) {
            Initiative::create($initiative);
        }

        foreach ($laws as $law) {
            Law::create($law);
        }

        foreach ($directors as $director) {
            Director::create($director);
        }
    }
}
