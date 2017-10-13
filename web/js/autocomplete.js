$(document).ready(function () {

    var skills = [
        '.net-compact-framework', '.net-framework', '.net-remoting', '1shoppingcart', 'a2billing', 'ablecommerce', 'abstract-window-toolkit-(awt)', 'actian', 'actionscript', 'actionscript-3', 'activex', 'activex-data-objects-(ado)', 'ada', 'adaptive-algorithms', 'adk', 'ado.net', 'ado.net-entity-framework', 'adobe-air', 'adobe-dreamweaver', 'adobe-flash', 'adobe-flex', 'advanced-business-application-programming-(abap)', 'agile-software-development', 'ajax', 'akka', 'alfresco-development', 'alfresco-user', 'algorithm-development', 'alpha', 'amazon-appstore', 'amazon-ec2', 'amazon-mws', 'amazon-relational-database-service', 'amazon-s3', 'amazon-web-services', 'amember', 'amqp', 'android', 'android-app-development', 'android-sdk', 'angularjs', 'ansi-c', 'apache-administration', 'apache-ant', 'apache-avro', 'apache-camel', 'apache-cassandra', 'apache-click', 'apache-cocoon', 'apache-cordova', 'apache-cxf', 'apache-flume', 'apache-hive', 'apache-jakarta-poi', 'apache-kafka', 'apache-mahout', 'apache-maven', 'apache-ofbiz', 'apache-shirol', 'apache-solr', 'apache-spark', 'apache-struts', 'apache-subversion-(svn)', 'apache-thrift', 'apache-tiles', 'apache-tomcat', 'api-development', 'api-documentation', 'apollo', 'app-store', 'app-usability-analysis', 'appcelerator-titanium', 'appfuse', 'appian-bpm-suite', 'apple-uikit-framework', 'apple-webobjects', 'apple-xcode', 'applescript', 'application-lifecycle-management', 'application-programming', 'application-server', 'arcgis', 'arcscene', 'arduino', 'arm', 'artificial-intelligence', 'artificial-neural-networks', 'artioscad', 'artisteer', 'asp', 'asp.net', 'asp.net-mvc', 'aspdotnetstorefront', 'assembla', 'assembly-language', 'asynchronous-i/o', 'atl', 'atlassian-confluence', 'atlassian-jira', 'atm-implementation', 'atmel-avr', 'atom', 'auctiva', 'augmented-reality', 'authorize.net-development', 'autodys-accelicad', 'autohotkey', 'autoit', 'automated-testing', 'automation', 'aweber', 'awk', 'axapta', 'axiis', 'axiom-microstation-productivity-toolkit', 'axiom-productivity-tools', 'axure-rp', 'backbone.js', 'bada', 'basecamp', 'bash-shell-scripting', 'bbpress', 'behavior-driven-development-(bdd)', 'beos', 'bgl-simple-fund', 'big-data', 'bigcommerce', 'birt', 'bitcoin', 'bitrix', 'bitrix-intranet', 'bitrock-installbuilder', 'biztalk-server', 'black-box-testing', 'blackberry-app-development', 'blackberry-jde', 'blazeds', 'blitz-basic', 'bluetooth', 'boonex-dolphin', 'boost', 'bootstrap', 'borland-c++-builder', 'borland-silktest', 'box.net-development', 'box2d', 'bpcs', 'buddypress', 'bugzilla', 'business-activity-monitoring', 'business-intelligence', 'business-it-alignment', 'business-process-modeling', 'business-process-reengineering', 'c', 'c#', 'c++', 'cache-management', 'cairngorm', 'cakephp', 'calculus', 'capistrano', 'capture-nx2', 'carbide.c++', 'caspio-administration', 'caspio-programming', 'central-desktop-development', 'centreon', 'certified-information-systems-security-professional-(cissp)', 'cgi', 'chrome-extension', 'chrome-os', 'civicrm', 'clearquest', 'clickbank', 'clojure', 'cloud-security-framework', 'cloudforge', 'cms-development', 'cnc-programming', 'cobol', 'cocoa', 'cocoa-touch', 'cocos2d', 'code-refactoring', 'codeigniter', 'codesys', 'codewarrior', 'coffeescript', 'cognos', 'coldfusion', 'collabnet-teamforge', 'collaborative-filtering', 'comet', 'communications', 'compiler', 'component-object-model-(microsoft-com)', 'computational-linguistics', 'computer-engineering', 'computer-vision', 'concept-software-inpage', 'concrete5-cms', 'constant-contact', 'contao-cms', 'continuous-integration', 'corba', 'core-java', 'corel-ventura', 'corona', 'cosmos-os', 'cpanel', 'crm', 'cryptography', 'cs-cart', 'css', 'css3', 'cubecart', 'cucumber', 'cuda', 'curl', 'custom-cms', 'customer-information-control-system-(cics)', 'cvs', 'd-programming-language', 'd3.js', 'dart', 'data-backup', 'data-cleansing', 'data-ingestion', 'data-logistics', 'data-modeling', 'data-science', 'data-scraping', 'data-structures', 'data-visualization', 'data-warehousing', 'database-caching', 'database-cataloguing', 'database-design', 'database-modeling', 'database-programming', 'database-testing', 'datalife-engine', 'davinci-resolve', 'dbase-administration', 'dbase-programming', 'dbms', 'delphi', 'demandware', 'desktop-applications', 'devexpress', 'device-driver-development', 'devops', 'digital-access-pass', 'digital-engineering', 'digital-mapping', 'digital-signal-processing', 'directshow', 'directx', 'distributed-computing', 'django', 'docbook', 'doctrine-orm', 'document-object-model', 'dojo-toolkit', 'domain-migration', 'dos', 'dotnetnuke', 'dropbox-api', 'drupal', 'dwolla-api', 'e-learning', 'ebay-api', 'eclipse', 'ecmascript', 'ecommerce-platform-development', 'edge', 'elasticsearch', 'elastix', 'electronic-data-interchange-(edi)', 'electronic-workbench', 'elgg', 'embedded-c', 'embedded-linux', 'embedded-systems', 'ember.js', 'enterprise-javabeans-(ejb)', 'entity-framework', 'erdas-imagine', 'erlang', 'erwin', 'eucalyptus-cloud', 'excel-vba', 'express-scribe', 'expression-engine', 'ext-js', 'ez-publish', 'f#', 'facebook-development', 'facebook-games-development', 'facebook-javascript-(fbjs)', 'fbml', 'ffmpeg', 'field-map', 'filemaker', 'fire-os-development', 'firebird', 'firefox-plugin-development', 'flash-3d', 'flask', 'flowcharts', 'foreign-exchange-trading', 'form-z', 'fortran', 'forum-development', 'foursquare-development', 'foxpro-programming', 'freemarker', 'freeswitch', 'frontend-development', 'ftp', 'full-text-search-engines', 'functional-testing', 'game-development', 'game-programming', 'game-testing', 'gamesalad-creator', 'gamification', 'gearman', 'genetic-algorithms', 'geographic-information-system-(gis)', 'geolocation', 'geometry', 'geospatial', 'getresponse', 'ggplot2', 'gimp', 'git', 'github', 'glassfish', 'glsl', 'gnu-octave', 'go', 'golang', 'goldmine', 'google-adsense-api', 'google-adwords-development', 'google-analytics-api', 'google-app-engine', 'google-app-engine-api', 'google-apps-api', 'google-calendar-development', 'google-docs-api', 'google-gadgets', 'google-gadgets-api', 'google-glass', 'google-glass-sdk', 'google-map-maker', 'google-maps-api', 'google-reader-api', 'google-shopping', 'google-sites-administration', 'google-sites-api', 'google-swiffy', 'google-web-toolkit', 'google+-development', 'google+-marketing', 'gotomypc', 'gps-development', 'gradle', 'grails', 'graph-databases', 'graphics-programming', 'gravity-forms', 'groovy', 'gruntjs', 'gtk+', 'hadoop', 'haml', 'haskell', 'haxe', 'hbase', 'heroku', 'hibernate', 'highcharts', 'home-automation', 'hp-cloud', 'hp-network-management-center-(hpnmc)', 'hp-quicktest-professional-(hpqtp)', 'hp-ux-administration', 'html', 'html5', 'ibm-as/400-control-language', 'ibm-db2-administration', 'ibm-db2-programming', 'ibm-lotus-domino', 'ibm-lotus-notes-traveler', 'ibm-lotus-symphony', 'ibm-powerpc-programming', 'ibm-rational-rose', 'ibm-smartcloud', 'ibm-system-p', 'ibm-system-x', 'ibm-tivoli-framework', 'ibm-watson', 'icefaces', 'imacros', 'image-processing', 'ims', 'in-game-advertising', 'indexing', 'informatica', 'information-architecture', 'information-design', 'infragistics', 'infusionsoft-development', 'inno-setup', 'instagram-api', 'installer-development', 'installshield', 'instrumentation', 'integrated-circuits', 'intellij-idea', 'interactive-voice-response', 'internet-information-services-(iis)', 'internet-security', 'interspire', 'intranet-architecture', 'intranet-implementation', 'ionic-framework', 'ios-development', 'ipad-app-development', 'iphone-app-development', 'ireport', 'issue-tracking-systems', 'it-management', 'it-service-management', 'itextsharp', 'j2ee', 'j2me', 'j2se', 'jasperreports', 'java', 'java-ee', 'java-me', 'java-remote-method-invocation-(java-rmi)', 'java-servlets-development', 'javafx', 'javascript', 'javaserver-faces-(jsf)', 'jaxb', 'jboss', 'jboss-seam', 'jbpm', 'jcl', 'jdbc', 'jdeveloper', 'jenkins', 'jetpack', 'jimdo', 'jingle-program-production', 'jinja2', 'jmeter', 'jncia-junos', 'jndi', 'jomsocial-development', 'joomla', 'joomla-fabrik', 'joomla-migration', 'jpa', 'jquery', 'jquery-mobile', 'jsharp', 'json', 'jsp', 'jstl', 'junit', 'kajabi', 'kannada', 'kendo-ui', 'kentico-cms', 'kernel', 'keyboarding', 'kindle-app-development', 'kindle-fire', 'knockoutjs', 'kohana', 'korn-shell', 'kvm', 'labview', 'lamp-administration', 'landing-pages', 'laravel-framework', 'lean-consulting', 'lemonstand', 'less', 'libcurl', 'libgdx', 'liferay', 'limejs', 'limesurvey', 'linear-programming', 'linkedin-development', 'linq', 'linq-to-entities', 'linq-to-sql', 'liquidplanner', 'lisp', 'lithium-framework', 'load-testing', 'loadrunner', 'log4j', 'logixml', 'lotus-approach', 'lotus-notes', 'lua', 'lucene-search', 'mac-os-app-development', 'mac-osx-administration', 'machine-design', 'machine-learning', 'magento', 'magic-tricks', 'mailchimp', 'make-build-script', 'malware', 'mambo', 'mantis', 'manual-test-execution', 'mapinfo', 'mapreduce', 'mcafee-virusscan', 'mechanical-turk-api', 'medical-imaging', 'medical-informatics', 'memcached', 'merchantrun', 'merchantrun-globallink', 'mercurial', 'metatrader-4-(mt4)', 'meteor', 'microcontroller-programming', 'microsoft-access-administration', 'microsoft-access-programming', 'microsoft-dynamics-administration', 'microsoft-dynamics-crm', 'microsoft-dynamics-development', 'microsoft-dynamics-erp', 'microsoft-dynamics-gp', 'microsoft-entity-framework', 'microsoft-foundation-classes-(mfc)', 'microsoft-infopath', 'microsoft-kinect-development', 'microsoft-message-queue-server-(mmsq)', 'microsoft-office-sharepoint-server', 'microsoft-outlook-development', 'microsoft-sharepoint-administration', 'microsoft-sharepoint-designer', 'microsoft-sharepoint-development', 'microsoft-silverlight', 'microsoft-sql-server-notification-services', 'microsoft-sql-server-programming', 'microsoft-sql-ssas', 'microsoft-sql-ssrs', 'microsoft-visual-c++', 'microsoft-visual-studio', 'microsoft-visual-studio-lightswitch', 'microsoft-windows-azure', 'microsoft-windows-media-connect', 'microsoft-windows-phone-7-app-development', 'microsoft-windows-template-library', 'microsoft-windows-workflow-foundation', 'microstrategy', 'midi', 'minecraft', 'mobile-advertising', 'mobile-app-development', 'mobile-app-testing', 'mobile-development-framework', 'mobile-programming', 'mocha', 'mockito', 'model-view-viewmodel-(mvvm)', 'modx', 'mongodb', 'mono', 'moodle', 'mootools', 'movabletype', 'mozenda-scraper', 'mql-4', 'multi-touch-hardware-programming', 'multithreaded-programming', 'music', 'mvc-framework', 'mxml', 'mysql-administration', 'mysql-programming', 'n2cms', 'natural-language-processing', 'navigation-system-design', 'navigation-system-implementation', 'neo4j', 'netbeans', 'netsuite-development', 'network-pentesting', 'network-programming', 'nginx', 'nhibernate', 'ning-development', 'node.js', 'non-disclosure-agreements', 'nopcommerce', 'nosql', 'oauth', 'object-oriented-design', 'object-oriented-php', 'object-oriented-programming-(oop)', 'object-pascal', 'objective-c', 'objective-j', 'ocaml', 'ocr-algorithms', 'ocr-tesseract', 'odbc', 'ogre', 'olap', 'omnigraffle', 'oops', 'oovoo-development', 'openbravo-pos', 'openbsd', 'opencart', 'opencv', 'openemm', 'openerp-administration', 'openerp-development', 'opengl', 'opengl-es', 'openlayers', 'openstack', 'opensuse', 'opentok-development', 'openvbx', 'openvms', 'openwrt', 'openx', 'optimizepress', 'orace-obiee-plus', 'oracle-agile', 'oracle-apex', 'oracle-application-framework', 'oracle-application-server', 'oracle-atg-web-commerce', 'oracle-brm', 'oracle-complex-events-processing', 'oracle-crm-on-demand', 'oracle-data-guard', 'oracle-database', 'oracle-demantra', 'oracle-e-business-suite', 'oracle-endeca', 'oracle-enterprise-service-bus', 'oracle-forms', 'oracle-fusion-applications', 'oracle-fusion-middleware', 'oracle-hyperion-planning', 'oracle-java-ee', 'oracle-patching', 'oracle-performance-tuning', 'oracle-plsql', 'oracle-policy-automation', 'oracle-primavera', 'oracle-programming', 'oracle-rightnow', 'oracle-soa-suite', 'oracle-sun-ray', 'oracle-taleo', 'oracle-team-productivity-center', 'oracle-transportation-management', 'oracle-unified-method', 'oracle-universal-content-management', 'oracle-upgrade', 'oracle-user-productivity-kit', 'oracle-weblogic', 'orangecrm', 'orchard-cms', 'orm', 'oscommerce', 'osgi', 'palm', 'palm-app-development', 'palm-webos-application-development', 'papercraft', 'parallels-virtual-desktop', 'parse-mobile-app-platform', 'pascal', 'payment-gateway-integration', 'payment-processing', 'paypal-development', 'paypal-integration', 'pdf-conversion', 'pentaho', 'perforce', 'performance-testing', 'performance-tuning', 'perl', 'perl-catalyst', 'perl-mojolicious', 'perldancer', 'pervasive-software', 'phonegap', 'php', 'php-nuke', 'phpbb', 'phpfox', 'phpmyadmin', 'phpmydirectory', 'physics', 'pig', 'platform-migration', 'play-framework', 'plc-&-scada', 'plc-programming', 'pligg', 'plivo', 'polymer-clay-sculpting', 'portlets', 'pos-terminal-development', 'postgresql-administration', 'postgresql-programming', 'postscript', 'power-builder', 'prado-php-framework', 'prestashop', 'primefaces', 'private-clouds', 'product-management', 'program-management', 'project-scheduling', 'prolog', 'protools', 'prototype-javascript-framework', 'psd-to-html', 'psd-to-mailchimp', 'psd-to-wordpress', 'psd-to-xhtml', 'psd2cms', 'pspice', 'puppet-administration', 'pylons', 'pyqt', 'python', 'python-numpy', 'python-scipy', 'qa-engineering', 'qa-management', 'qt', 'quartz-scheduler', 'r-hadoop', 'rackspace', 'radiant-cms', 'radius', 'raphael-js', 'rapid-miner', 'rapid-prototyping', 'raspberry-pi', 'rational-unified-process-(rup)', 'razor-template-engine', 'real-estate-idx', 'real-time-stream-processing', 'realbasic', 'recommender-systems', 'red-hat-certified-engineer-(rhce)', 'red5', 'redis', 'redmine', 'refinery-cms', 'regular-expressions', 'relational-databases', 'remote-sensing', 'requirement-management', 'requirements-analysis', 'resin', 'resource-description-framework-(rdf)', 'rest', 'rets', 'reverse-engineering', 'rhodes-framework', 'robot-framework', 'robotics', 'rspec', 'rss', 'rtl', 'rtml', 'ruby', 'ruby-on-rails', 'russian-language', 's', 'saas', 'sage-erp-accpac', 'salesforce-apex', 'salesforce-app-development', 'salesforce.com', 'sap-abap', 'sap-bsp', 'sap-business-objects', 'sap-crm', 'sap-crystal-reports', 'sap-erp', 'sap-logistics-execution', 'sap-sd', 'sas', 'sass', 'scada', 'scala', 'scenario-planning', 'scheme', 'scientific-computation', 'scorm', 'scrapebox', 'scrapy', 'scripting', 'scripts-&-utilities', 'scrum', 'sdlx', 'section-508-compliance', 'selenium', 'selenium-webdriver', 'sencha-gxt', 'sencha-touch', 'sendmail', 'sentiment-analysis', 'serial-port-interfacing', 'serialization', 'shiva3d', 'shopify', 'shopify-templates', 'silex-framework', 'silverstripe', 'simple-directmedia-layer', 'sinatra-framework', 'sip', 'sitebuildit', 'sitecore', 'skadate', 'skype-development', 'slackware-linux', 'smartfoxserver', 'smarty', 'smpp', 'sms', 'sms-gateway', 'smtp', 'snort', 'soap', 'soapui', 'social-networking-development', 'socialengine', 'socket-programming', 'software-configuration-management', 'software-debugging', 'software-documentation', 'software-licensing', 'software-qa-testing', 'software-testing', 'spamassassin', 'sparx-systems-enterprise-architect', 'sphinx', 'spine-js', 'spree', 'spring-framework', 'spring-security', 'sqa', 'sql', 'sql-azure', 'sql-clr', 'sql-programming', 'sql-server-integration-services-(ssis)', 'sqlite-administration', 'sqlite-programming', 'sqr', 'squarespace', 'ssh', 'ssi', 'ssl', 'stakeholder-management', 'standard-template-library-(stl)', 'stenography', 'stream-processing', 'stripe', 'subversion', 'sugarcrm-development', 'surveymonkey', 'swift', 'swing', 'swt', 'symbian-development', 'symfony', 'system-analysis', 'system-automation', 'systems-development', 'talend-open-studio', 'tastypie', 'taxonomy', 'tcp/ip', 'teaching-algebra', 'teaching-mathematics', 'team-foundation-server', 'telerik', 'telerik-sitefinity-cms', 'templates', 'tesseract', 'test-automation', 'test-case-design', 'test-driven-development', 'testcomplete', 'testing-framework', 'testlink', 'textpattern', 'thai', 'tizen', 'tk', 'tornado', 'tortoise-svn', 'transact-sql', 'tropo', 'twig', 'twilio-api', 'twitter-api', 'twitter-bootstrap', 'typo3', 'ubercart', 'umbraco', 'uml', 'unify', 'unit-testing', 'unity', 'unix', 'unix-shell', 'unreal-engine', 'unrealscript', 'usability-testing', 'user-acceptance-testing', 'vaadin-framework', 'vb.net', 'vba', 'vbscript', 'vbulletin', 'version-control', 'vertica', 'vhdl', 'vicidial', 'video-streaming', 'virtual-currency', 'virtual-machine', 'virtual-storage-access-method-(vsam)', 'virtuemart', 'virtuoso', 'visual-basic', 'visual-dataflex', 'visual-foxpro', 'visualforce', 'voicexml', 'voip-software', 'volusion', 'vtiger-adminstration', 'vtiger-development', 'vtk', 'wamp', 'web-crawler', 'web-crawling', 'web-hosting', 'web-programming', 'web-scraping', 'web-services', 'web-services-development', 'web-testing', 'webapp-pentesting', 'webgl', 'webisode-production', 'website-development', 'weebly', 'weka', 'whmcs-development', 'wicket', 'win32-app-development', 'windev', 'windev-mobile', 'windows-8-app-development', 'windows-app-development', 'windows-communication-foundation-(wcf)', 'windows-forms-development', 'windows-mobile', 'windows-phone', 'windows-presentation-foundation-(wpf)', 'winsock', 'wix', 'woocommerce', 'wordpress', 'wordpress-e-commerce', 'wordpress-plugin', 'worldspan', 'wowza-media-server', 'wrap-advertising', 'wxwidgets', 'x-cart', 'x86-assembly-language', 'xamarin', 'xaml', 'xara-xtreme', 'xbox', 'xenforo', 'xhtml', 'xml', 'xml-web-services', 'xml-rpc', 'xmpp', 'xpath', 'xquery', 'xsd', 'xsl', 'xslt', 'xul', 'yahoo-developer-skills', 'yahoo!-advertising-solutions', 'yahoo!-query-language', 'yahoo!-store', 'yii', 'yola', 'youtube-development', 'yui-library', 'zapier', 'zen-cart', 'zend-framework', 'zend-studio', 'zendesk-api-development', 'zk', 'zoho-creator', 'zoomla', 'zope', 'zurb-foundation', 'accounts-receivable-management', 'act!', 'activecollab', 'administrative-support', 'adobe-pdf', 'antitrust', 'apple-imovie', 'art-curation', 'atlassian-greenhopper', 'author-it', 'basic', 'bpo-it-services', 'building-estimation', 'business-management', 'business-scenario-development', 'calendar-management', 'change-management', 'computer-assembly', 'computer-hardware-installation', 'construction', 'cre-loaded', 'data-encoding', 'data-entry', 'database-management', 'document-control', 'document-review', 'drop-shipping', 'ebay-listing/writing', 'ebay-marketing', 'ebay-web-services', 'economic-analysis', 'elance', 'email-etiquette', 'etsy-administration', 'event-planning', 'filing', 'filipino', 'film-criticism', 'foxpro-administration', 'fraud-analysis', 'general-office-skills', 'google-apps', 'google-docs', 'google-play', 'google-reader', 'google-search', 'google-search-api', 'google-spreadsheets', 'google-spreadsheets-api', 'hungarian', 'ibm-infosphere-datastage', 'ibm-sametime', 'icontact', 'internet-research', 'inventory-management', 'investment-research', 'invoicing', 'job-description-writing', 'kaltura', 'lasso', 'lexisnexis-accurint', 'libreoffice', 'lithuanian', 'logistics-&-shipping', 'logmein-hamachi', 'mail-merge', 'malay', 'management-development', 'master-production-schedule', 'medical-billing-and-coding', 'medical-transcription', 'methods-engineering', 'microsoft-excel', 'microsoft-excel-powerpivot', 'microsoft-office', 'microsoft-onenote', 'microsoft-outlook', 'microsoft-project', 'microsoft-word', 'miva-merchant', 'mls-consulting', 'mobi', 'model-sheet-design', 'modul8', 'office-administration', 'operating-systems-development', 'order-entry', 'organizational-behavior', 'organizational-development', 'paint.net', 'personal-development', 'pinnacle-studio', 'plone', 'plumbing', 'process-architecture', 'project-management', 'project-management-professional', 'project-planning', 'punching', 'pure-data', 'quartz-composer', 'real-estate-appraisal', 'receipt-parsing', 'records-management', 'research', 'sabre', 'sap-analysis', 'sap-xcelsius', 'scale-modeling', 'scrumworks', 'six-sigma', 'skype', 'snagit', 'social-network-administration', 'spreadsheets', 'stock-management', 'time-management', 'trac', 'traffic-geyser', 'transcription', 'travel-planning', 'trixbox', 'tsm-administration', 'turbo-c', 'typing', 'underwriting', 'vendor-management-systems', 'violoncello', 'virtual-assistant', 'visual-merchandising', 'webisode-presentation', 'wml-script', 'word-processing', 'wordfast', 'wordperfect', 'xen-hypervisor', 'yahoo!-merchant-solutions', 'yahoo!-messenger', 'zoho-crm', 'academic-writing', 'adobe-framemaker', 'adobe-incopy', 'adobe-robohelp', 'afrikaans', 'agriculture', 'albanian', 'american-sign-language', 'amharic-language', 'ap-style-writing', 'arabic', 'arbitration', 'article-curation', 'article-rewriting', 'article-spinning', 'article-submission', 'article-writing', 'astrology', 'astrophysics', 'baking', 'bartending', 'basque', 'belle-nuit-subtitler', 'betfair', 'biography-writing', 'bioinformatics', 'biology', 'biostatistics', 'biotechnology', 'blog-writing', 'book-writing', 'bosnian', 'buildmyrank-writing', 'bulgarian', 'business-proposal-writing', 'business-writing', 'cantonese', 'catalan', 'catholic-theology', 'chemistry', 'chicago-manual-of-style', 'children\'s-writing', 'chinese', 'christian-theology', 'climate-sciences', 'comedy-writing', 'comic-writing', 'commercials', 'compliance', 'content-management', 'content-management-system', 'content-writing', 'cooking', 'copyediting', 'copyright', 'copywriting', 'cosmo-rs-chemical-engineering', 'counseling-psychology', 'cover-letter-writing', 'creative-writing', 'croatian', 'curriculum-development', 'czech', 'dancing', 'danish', 'data-analytics', 'dental-technology', 'dietetics', 'distance-education', 'document-conversion', 'driving', 'dutch', 'ebook-writing', 'ebooks', 'economics', 'editing', 'editorial-writing', 'ehealth', 'english', 'english-grammar', 'english-proofreading', 'english-punctuation', 'english-spelling', 'english-tutoring', 'environmental-law', 'environmental-science', 'esl-teaching', 'essay-writing', 'fact-checking', 'fashion-modeling', 'feature-writing', 'fiction-writing', 'filipino---visayan-dialect', 'film-dubbing', 'finale', 'financial-prospectus-writing', 'financial-writing', 'finnish', 'fire-protection-engineering', 'first-aid', 'forum-moderation', 'forum-posting', 'french', 'gambling', 'genetic-engineering', 'geology', 'german', 'ghostwriting', 'grant-writing', 'greek', 'guitar-composition', 'guitar-performance', 'haitian-creole', 'health-level-7', 'hebrew', 'hindi', 'history', 'hospitality', 'human-sciences', 'humor-writing', 'hvac-system-design', 'hypnosis', 'icd-coding', 'imaging', 'indonesian', 'islamic-theology', 'iso-9000', 'iso-9001', 'italian', 'japanese', 'javanese', 'jewish-theology', 'job-definition-format-(jdf)', 'jonas', 'journalism-writing', 'korean', 'latex', 'latvian', 'legal-translation', 'lesson-plan-writing', 'letter-writing', 'lingo', 'linguistics', 'linkvana', 'literature-review', 'localization', 'lyrics-writing', 'macedonian', 'malayalam', 'mandarin', 'marathi', 'marriage-counseling', 'martial-arts', 'medical-translation', 'medical-writing', 'microsoft-visio', 'mining-engineering', 'molecule-editors', 'motivational-speaking', 'music-engraving', 'neuro-linguistic-programming', 'news-writing-style', 'newsletter-writing', 'non-fiction-writing', 'norwegian', 'notary-public', 'nursing', 'nutrition', 'occupational-health', 'online-writing', 'pashto', 'persian', 'physical-fitness', 'piano-composition', 'piano-performance', 'poetry', 'policy-writing', 'polish', 'portuguese', 'posterous', 'press-advertising', 'press-release-writing', 'print-advertising', 'privacy', 'product-descriptions', 'proofreading', 'property-development', 'punjabi', 'quickfix', 'recipe-writing', 'report-writing', 'research-papers', 'resume-writing', 'reviews', 'romanian', 'rpg-writing', 'sales-letters', 'sales-writing', 'sap-materials-management', 'satire', 'scientific-research', 'scientific-writing', 'screenwriting', 'sculpture', 'sdl-trados', 'seo-writing', 'serbian', 'sermon', 'short-story-writing', 'sibelius', 'simplified-chinese', 'sinhala', 'slang-style-writing', 'slogans', 'slovakian', 'slovenian', 'soundtrack-pro', 'spanish', 'speech-writing', 'sports-writing', 'stored-procedure-development', 'subtitling', 'sustainable-energy', 'swedish', 'synopsis-writing', 'tagalog', 'tamil', 'teaching-english', 'teaching-physics', 'technical-documentation', 'technical-editing', 'technical-translation', 'technical-writing', 'telugu', 'theology', 'tourism', 'transcreation', 'translation', 'translation-afrikaans-english', 'translation-albanian-english', 'translation-arabic-english', 'translation-armenian-english', 'translation-belarusian-english', 'translation-bengali-english', 'translation-brazilian-portuguese-english', 'translation-bulgarian-english', 'translation-catalan-english', 'translation-chinese-english', 'translation-croatian-english', 'translation-czech-english', 'translation-danish-english', 'translation-dutch-english', 'translation-english-afrikaans', 'translation-english-albanian', 'translation-english-arabic', 'translation-english-armenian', 'translation-english-bengali', 'translation-english-brazilian-portuguese', 'translation-english-bulgarian', 'translation-english-catalan', 'translation-english-chinese', 'translation-english-croatian', 'translation-english-czech', 'translation-english-danish', 'translation-english-dutch', 'translation-english-estonian', 'translation-english-filipino', 'translation-english-finnish', 'translation-english-french', 'translation-english-galician', 'translation-english-georgian', 'translation-english-german', 'translation-english-greek', 'translation-english-gujarati', 'translation-english-haitian-creole', 'translation-english-hebrew', 'translation-english-hindi', 'translation-english-hungarian', 'translation-english-icelandic', 'translation-english-indonesian', 'translation-english-irish', 'translation-english-italian', 'translation-english-japanese', 'translation-english-kannada', 'translation-english-korean', 'translation-english-kyrgyz', 'translation-english-latin', 'translation-english-latvian', 'translation-english-lithuanian', 'translation-english-macedonian', 'translation-english-malay', 'translation-english-maltese', 'translation-english-mandarin', 'translation-english-norwegian', 'translation-english-persian', 'translation-english-polish', 'translation-english-portuguese', 'translation-english-romanian', 'translation-english-russian', 'translation-english-serbian', 'translation-english-slovak', 'translation-english-slovenian', 'translation-english-spanish', 'translation-english-swahili', 'translation-english-swedish', 'translation-english-tagalog', 'translation-english-tamil', 'translation-english-telugu', 'translation-english-thai', 'translation-english-turkish', 'translation-english-ukrainian', 'translation-english-urdu', 'translation-english-vietnamese', 'translation-english-welsh', 'translation-english-yiddish', 'translation-estonian-english', 'translation-filipino-english', 'translation-finnish-english', 'translation-french-english', 'translation-french-german', 'translation-french-spanish', 'translation-galician-english', 'translation-georgian-english', 'translation-german-english', 'translation-german-french', 'translation-german-polish', 'translation-greek-english', 'translation-gujarati-english', 'translation-haitian-creole-english', 'translation-hebrew-english', 'translation-hindi-english', 'translation-hungarian-english', 'translation-icelandic-english', 'translation-indonesian-english', 'translation-irish-english', 'translation-italian-english', 'translation-japanese-english', 'translation-kannada-english', 'translation-korean-english', 'translation-latin-english', 'translation-latvian-english', 'translation-lithuanian-english', 'translation-macedonian-english', 'translation-malay-english', 'translation-maltese-english', 'translation-mandarin-english', 'translation-norwegian-english', 'translation-persian-english', 'translation-polish-english', 'translation-polish-german', 'translation-portuguese-english', 'translation-romanian-english', 'translation-russian-english', 'translation-serbian-english', 'translation-slovak-english', 'translation-slovenian-english', 'translation-spanish-english', 'translation-spanish-french', 'translation-swahili-english', 'translation-swedish-english', 'translation-tagalog-english', 'translation-tamil-english', 'translation-telugu-english', 'translation-thai-english', 'translation-turkish-english', 'translation-ukrainian-english', 'translation-urdu-english', 'translation-vietnamese-english', 'translation-welsh-english', 'translation-yiddish-english', 'travel-writing', 'turkish', 'typepad', 'ukrainian', 'urdu', 'user\'s-guide-writing', 'vietnamese', 'volleyball', 'website-baker', 'welsh', 'white-paper-writing', 'wiki', 'wikipedia', 'workforce-management', 'writing', 'yahoo!-search-marketing', 'yoga', 'accounting', 'accountmate', 'accounts-payable-management', 'acquisitions', 'active-listening', 'amazon-webstore', 'applicant-tracking-systems', 'auditing', 'bank-reconciliation', 'behavioral-event-interviewing', 'blackboard', 'bookkeeping', 'budgeting-&-forecasting', 'buildium', 'business-analysis', 'business-coaching', 'business-continuity-planning', 'business-development', 'business-mathematics', 'business-modeling', 'business-planning', 'business-valuation', 'certified-public-accountant-(cpa)', 'check-point', 'clear-books', 'collection-agencies', 'commercial-lending', 'corporate-finance', 'corporate-strategy', 'corporate-taxes', 'cost-accounting', 'derivatives', 'dsl-troubleshooting', 'entrepreneurship', 'financial-accounting', 'financial-analysis', 'financial-forecasting', 'financial-management', 'financial-modeling', 'financial-reporting', 'franchise-consulting', 'gaap', 'hardware-prototyping', 'hr-benefits', 'hrm', 'human-resource-information-systems', 'human-resource-management', 'insurance-consulting', 'internal-auditing', 'international-taxation', 'interviewing', 'intuit-quickbooks', 'intuit-quicken', 'irm-income-tax-audits', 'islamic-banking', 'job-costing', 'kaizen', 'management-consulting', 'management-skills', 'myob-administration', 'netsuite-administration', 'operations-management', 'oracle-financials-applications', 'oracle-global-trade-management', 'payroll-processing', 'peachtree-accounting', 'peoplecode', 'portfolio-performance-modeling', 'processing', 'property-management', 'property-tax', 'psychometric-examination', 'purchasing-management', 'real-estate-management', 'recruiting', 'retail-sales-management', 'sage-peachtree-complete-accounting', 'sap-hana', 'sassu', 'startup-consulting', 'statpoint-statgraphics', 'strategic-planning', 'stress-management', 'tax-preparation', 'teamviewer', 'technical-analysis', 'technical-recruiter', 'venture-capital-consulting', 'wave-accounting', 'xero', 'account-management', 'ad-planning-&-buying', 'ad-posting', 'ad-servers', 'adobe-business-catalyst', 'adobe-digital-marketing-suite', 'advertising', 'affiliate-marketing', 'amadeus', 'analytics', 'appian', 'appointment-setting', 'automated-call-distribution', 'b2b-marketing', 'bing-ads', 'blog-commenting', 'blog-development', 'brand-licensing', 'brand-management', 'brand-marketing', 'broadcast-advertising', 'bulk-marketing', 'classifieds-posting', 'cold-calling', 'complaint-management', 'conversion-rate-optimization', 'crowdfunding', 'direct-marketing', 'directory-submission', 'display-ads', 'ebay-motors', 'eloqua', 'email-deliverability', 'email-marketing', 'event-management', 'exacttarget', 'facebook-marketing', 'facelets', 'five9', 'freelance-marketing', 'friendster', 'fuel-cms', 'fundraising', 'google-adsense', 'google-adwords', 'google-analytics', 'google-places-api', 'google-webmaster-central', 'google-website-optimizer', 'google+', 'hootsuite', 'hp-quality-center', 'hubspot', 'ibm-spss', 'inbound-marketing', 'information-builders-webfocus', 'infusionsoft-administration', 'infusionsoft-marketing', 'instagram-marketing', 'internet-marketing', 'investigative-reporting', 'itk', 'kickstarter-marketing', 'kindle-fire-apps', 'kissmetrics', 'lead-generation', 'link-building', 'link-wheel', 'linkedin-recruiting', 'loyalty-marketing', 'market-research', 'marketing-automation', 'marketing-cloud-administration', 'marketing-cloud-development', 'marketing-cloud-marketing', 'marketing-strategy', 'marketo', 'media-buying', 'media-relations', 'mediawiki', 'microsoft-adcenter', 'microsoft-mappoint', 'mindtouch', 'mixpanel', 'multi-level-marketing-(mlm)', 'myspace-marketing', 'negotiation', 'ning-marketing', 'off-page-optimization', 'on-page-optimization', 'opensocial', 'operations-research', 'optimizely', 'oracle-peoplesoft-administration', 'oracle-peoplesoft-development', 'outbound-sales', 'pardot-administration', 'pardot-development', 'pardot-marketing', 'pay-per-click', 'pay-per-click-advertising', 'pinterest-marketing', 'predictive-analytics', 'proposal-writing', 'public-relations', 'public-speaking', 'qualitative-research', 'quick-sales-system', 'relationship-management', 'reputation-management', 'responsys-administration', 'responsys-development', 'responsys-marketing', 'retail-merchandising', 'sai', 'sales', 'sales-management', 'sales-promotion', 'salesgenie.com', 'sassie-mystery-shopping', 'search-engine-marketing-(sem)', 'search-engine-optimization-(seo)', 'selling', 'senuke-x', 'seo-audit', 'seo-backlinking', 'seo-keyword-research', 'seomoz', 'servoy', 'smo', 'social-bookmarking', 'social-media-management', 'social-media-marketing', 'social-media-optimization-(smo)', 'supervised-learning', 'survey-design', 'telemarketing', 'trade-marketing', 'tumblr', 'twitter-marketing', 'u.s.-culture', 'unbounce', 'unify-corporation', 'vbseo', 'video-ripping', 'viral-marketing', 'web-analytics', 'website-analytics', 'word-of-mouth', 'xrumer', 'youtube-marketing', 'zillow-marketing', '2d-animation', '2d-design', '3d-animation', '3d-rigging', 'ableton-live', 'acdsee', 'acrylic-painting', 'adobe-acrobat', 'adobe-after-effects', 'adobe-audition', 'adobe-captivate', 'adobe-contribute', 'adobe-creative-suite', 'adobe-director', 'adobe-elearning-suite', 'adobe-encore', 'adobe-fireworks', 'adobe-freehand', 'adobe-golive', 'adobe-illustrator', 'adobe-imageready', 'adobe-indesign', 'adobe-insight', 'adobe-livecycle-designer', 'adobe-muse', 'adobe-pagemaker', 'adobe-photoshop', 'adobe-photoshop-lightroom', 'adobe-premiere', 'adobe-premiere-elements', 'adobe-premiere-pro', 'adobe-soundbooth', 'adobe-wallaby', 'agal', 'album-cover-design', 'alibre-design', 'animation', 'anime-studio', 'apple-ibooks', 'apple-iweb', 'apple-iwork', 'apple-motion', 'art-direction', 'articulate', 'articulate-engage', 'articulate-presenter', 'articulate-storyline', 'articulate-studio', 'artlantis-studio', 'artrage', 'arts-&-crafts', 'audacity', 'audio-design', 'audio-editing', 'audio-engineering', 'audio-mastering', 'audio-mixing', 'audio-post-production', 'audio-postediting', 'audio-production', 'audio-restoration', 'autodesk-softimage', 'aviation', 'avid', 'avid-pro-tools', 'away3d', 'balsamiq', 'banner-ad-design', 'banner-ads', 'bengali', 'book-cover-design', 'brand-consulting', 'brochure-design', 'business-card-design', 'cadence-platform', 'cakewalk-sonar', 'calligraphy', 'camtasia', 'caricature-drawing', 'cartography-&-maps', 'cartooning', 'cg-artwork', 'character-design', 'chroma-key', 'cinematography', 'clipping-path', 'comic-art', 'compositing', 'computer-graphics', 'computer-hardware-design', 'concept-artistry', 'concept-design', 'conceptshare-development', 'corel-paint-shop-pro', 'corel-painter', 'coreldraw', 'corporate-brand-identity', 'cover-design', 'covers-&-packaging', 'creative-&-talent', 'desktop-publishing', 'digital-painting', 'digital-photography', 'digital-scrapbooking', 'djing', 'drawing', 'drums', 'dvd-mastering', 'dvd-studio-pro', 'ebook-design', 'edufire', 'elliptic-curve-cryptography-(ecc)', 'embroidery', 'embroidery-digitization', 'epub', 'evolus-pencil', 'eyeon-fusion', 'fashion-design', 'film-direction', 'film-production', 'final-cut-pro', 'final-cut-pro-x', 'fl-studio', 'flyer-design', 'font-development', 'fontforge', 'format-&-layout', 'game-design', 'garageband', 'glassware', 'graphic-design', 'gui-design', 'houdini', 'icon-design', 'illustration', 'image-editing', 'infographics', 'inkscape', 'instructional-design', 'interaction-design', 'invitation-design', 'ipad-ui-design', 'iphone-ui-design', 'keynote', 'label-and-package-design', 'learning-management-system-(lms)', 'lectora', 'lettering', 'level-design', 'lightwave-3d', 'lightworks', 'logic-pro', 'logo-design', 'macaw', 'madcap-software', 'magazine-layout', 'magic-bullet-colorista', 'manga', 'mapr', 'medical-illustration', 'menu-design', 'microsoft-powerpoint', 'microsoft-publisher', 'microsoft-windows-movie-maker', 'microstock-photography', 'mobile-ui-design', 'model-sheet-drawing', 'motion-graphics', 'murals', 'music-arrangement', 'music-dubbing', 'music-producing', 'musical-composition', 'narration', 'non-linear-editing-system', 'novell-netware', 'nuke', 'nvidia-mental-ray', 'oil-painting', 'opentype', 'packaging-design', 'panoramic-stitching', 'papervision3d', 'particleillusion', 'performing-arts', 'photo-editing', 'photo-manipulation', 'photo-retouching', 'photograph-color-correction', 'photography', 'photoscape', 'portrait-painting', 'poster-design', 'prepress', 'presentation-design', 'presentations', 'presonus-studio-one', 'prezi', 'print-design', 'print-layout-design', 'propellerhead-reason', 'ptgui', 'publishing-fundamentals', 'quark-xpress', 'radio-broadcasting', 'radio-personality', 'realist-painting', 'responsive-web-design', 'rotoscoping', 'rpg-development', 'sequential-art', 'sigmaplot', 'singing', 'sketch', 'sketching', 'sony-vegas', 'sound-design', 'sound-editing', 'sound-effects', 'sound-forge', 'stationery-design', 'steinberg-cubase', 'sticker-design', 'still-life-painting', 'storyboarding', 'style-guide-development', 'synthetic-aperture-color-finesse', 't-shirt-design', 'textile-engineering', 'the-foundry-nuke', 'toon-boom-harmony', 'toon-boom-studio', 'trade-show-exhibition-design', 'typesetting', 'typography', 'ulead-videostudio', 'urban-design', 'user-experience-design', 'user-interface-design', 'vectorworks', 'vfx-animation', 'vfx-design', 'video-conversion', 'video-editing', 'video-post-editing', 'video-production', 'video-publishing', 'video-sales-letter', 'video-upload', 'videography', 'violin-composition', 'violin-performance', 'visual-arts', 'voice-over', 'voice-talent', 'watercolor-painting', 'web-design', 'web-host-manager', 'webflow', 'website-prototyping', 'website-wireframing', 'whiteboard-animation', 'wilcom-embroidery-digitization', 'wilcom-embroiderystudio', 'wireframing', 'worldbuilding'
    ];

    function split(val) {
        return val.split(/,\s*/);
    }

    function extractLast(term) {
        return split(term).pop();
    }

    // multiptle autocomplete в данных полях
    $("#search_form_skills")
    // don't navigate away from the field on tab when selecting an item
        .on("keydown", function (event) {
            if (event.keyCode === $.ui.keyCode.TAB &&
                $(this).autocomplete("instance").menu.active) {
                event.preventDefault();
            }
        })
        .autocomplete({
            //minLength: 4,
            search: function () {
                var term = extractLast(this.value);
                if (term.length < 3) {
                    return false;
                }
            },
            source: function (request, response) {
                // delegate back to autocomplete, but extract the last term
                response($.ui.autocomplete.filter(
                    skills, extractLast(request.term)));
            },
            focus: function () {
                // prevent value inserted on focus
                return false;
            },
            select: function (event, ui) {
                var terms = split(this.value);
                // remove the current input
                terms.pop();
                // add the selected item

                terms.push(ui.item.value);
                // add placeholder to get the comma-and-space at the end
                terms.push("");
                this.value = terms.join(", ");
                return false;
            }
        });


    $('#search_form_filterSkills')
    // don't navigate away from the field on tab when selecting an item
        .on("keydown", function (event) {
            if (event.keyCode === $.ui.keyCode.TAB &&
                $(this).autocomplete("instance").menu.active) {
                event.preventDefault();
            }
        })
        .autocomplete({
            //minLength: 4,
            search: function () {
                var term = extractLast(this.value);
                if (term.length < 3) {
                    return false;
                }
            },
            source: function (request, response) {
                // delegate back to autocomplete, but extract the last term
                response($.ui.autocomplete.filter(
                    skills, extractLast(request.term)));
            },
            focus: function () {
                // prevent value inserted on focus
                return false;
            },
            select: function (event, ui) {
                var terms = split(this.value);
                // remove the current input
                terms.pop();
                // add the selected item

                terms.push(ui.item.value);
                // add placeholder to get the comma-and-space at the end
                terms.push("");
                this.value = terms.join(", ");
                return false;
            }
        });

    


    $("#search_form_skills")
    // don't navigate away from the field on tab when selecting an item
        .on("keydown", function (event) {
            if (event.keyCode === $.ui.keyCode.TAB &&
                $(this).autocomplete("instance").menu.active) {
                event.preventDefault();
            }
        })
        .autocomplete({
            //minLength: 1,
            search: function () {
                var term = extractLast(this.value);
                if (term.length < 3) {
                    return false;
                }
            },
            source: function (request, response) {
                // delegate back to autocomplete, but extract the last term
                response($.ui.autocomplete.filter(
                    skills, extractLast(request.term)));
            },
            focus: function () {
                // prevent value inserted on focus
                return false;
            },
            select: function (event, ui) {
                var terms = split(this.value);
                // remove the current input
                terms.pop();
                // add the selected item

                terms.push(ui.item.value);
                // add placeholder to get the comma-and-space at the end
                terms.push("");
                this.value = terms.join(", ");
                return false;
            }
        });

    // далее скрипт, который показывает чекбоксы только тех субкатегорий, которые входят в выбранную категорию
    $('.checkbox').hide();

    if($('#search_form_category').val()==='Web, Mobile & Software Dev'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Desktop Software Development'
                || text===' Ecommerce Development'
                || text===' Game Development'
                || text===' Mobile Development'
                || text===' Product Management'
                || text===' QA & Testing'
                || text===' Scripts & Utilities'
                || text===' Web Development'
                || text===' Web & Mobile Design'
                || text===' Other - Software Development'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Design & Creative'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Animation'
                || text===' Audio Production'
                || text===' Graphic Design'
                || text===' Illustration'
                || text===' Logo Design & Branding'
                || text===' Photography'
                || text===' Presentations'
                || text===' Video Production'
                || text===' Voice Talent'
                || text===' Other - Design & Creative'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Admin Support'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Data Entry'
                || text===' Personal / Virtual Assistant'
                || text===' Project Management'
                || text===' Transcription'
                || text===' Web Research'
                || text===' Other - Admin Support'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Customer Service'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Customer Service'
                || text===' Technical Support'
                || text===' Other - Customer Service'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='IT & Networking'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Database Administration'
                || text===' ERP / CRM Software'
                || text===' Information Security'
                || text===' Network & System Administration'
                || text===' Web Research'
                || text===' Other - IT & Networking'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Writing'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Academic Writing & Research'
                || text===' Article & Blog Writing'
                || text===' Copywriting'
                || text===' Creative Writing'
                || text===' Editing & Proofreading'
                || text===' Grant Writing'
                || text===' Resumes & Cover Letters'
                || text===' Technical Writing'
                || text===' Web Content'
                || text===' Other - Writing'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Sales & Marketing'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Display Advertising'
                || text===' Email & Marketing Automation'
                || text===' Lead Generation'
                || text===' Market & Customer Research'
                || text===' Marketing Strategy'
                || text===' Public Relations'
                || text===' SEM - Search Engine Marketing'
                || text===' SEO - Search Engine Optimization'
                || text===' SMM - Social Media Marketing'
                || text===' Telemarketing & Telesales'
                || text===' Other - Sales & Marketing'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Data Science & Analytics'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' A/B Testing'
                || text===' Data Visualization'
                || text===' Data Extraction / ETL'
                || text===' Data Mining & Management'
                || text===' Machine Learning'
                || text===' Quantitative Analysis'
                || text===' Other - Data Science & Analytics'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Translation'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' General Translation'
                || text===' Legal Translation'
                || text===' Medical Translation'
                || text===' Technical Translation'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Engineering & Architecture'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' 3D Modeling & CAD'
                || text===' Architecture'
                || text===' Chemical Engineering'
                || text===' Civil & Structural Engineering'
                || text===' Contract Manufacturing'
                || text===' Electrical Engineering'
                || text===' Interior Design'
                || text===' Mechanical Engineering'
                || text===' Product Design'
                || text===' Other - Engineering & Architecture'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Legal'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Contract Law'
                || text===' Corporate Law'
                || text===' Criminal Law'
                || text===' Family Law'
                || text===' Intellectual Property Law'
                || text===' Paralegal Services'
                || text===' Other - Legal'){

                $(this).parent().show();
            }

        });
    }


    if($('#search_form_category').val()==='Accounting & Consulting'){
        $('#search_form_subcategory').find('label').each(function(){
            text=$(this).text();

            if(text===' Accounting'
                || text===' Financial Planning'
                || text===' Human Resources'
                || text===' Management Consulting'
                || text===' Other - Accounting & Consulting'){

                $(this).parent().show();
            }

        });
    }


    $('#search_form_category').on('change', function(){

        $('.checkbox').hide();

        $('#search_form_subcategory').find('input').each(function(){
            $(this).prop('checked', false);
        });

        if($(this).val()==='Web, Mobile & Software Dev'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Desktop Software Development'
                    || text===' Ecommerce Development'
                    || text===' Game Development'
                    || text===' Mobile Development'
                    || text===' Product Management'
                    || text===' QA & Testing'
                    || text===' Scripts & Utilities'
                    || text===' Web Development'
                    || text===' Web & Mobile Design'
                    || text===' Other - Software Development'){

                    $(this).parent().show();
                }


            });
        }

        if($(this).val()==='Design & Creative'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Animation'
                    || text===' Audio Production'
                    || text===' Graphic Design'
                    || text===' Illustration'
                    || text===' Logo Design & Branding'
                    || text===' Photography'
                    || text===' Presentations'
                    || text===' Video Production'
                    || text===' Voice Talent'
                    || text===' Other - Design & Creative'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Admin Support'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Data Entry'
                    || text===' Personal / Virtual Assistant'
                    || text===' Project Management'
                    || text===' Transcription'
                    || text===' Web Research'
                    || text===' Other - Admin Support'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Customer Service'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Customer Service'
                    || text===' Technical Support'
                    || text===' Other - Customer Service'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='IT & Networking'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Database Administration'
                    || text===' ERP / CRM Software'
                    || text===' Information Security'
                    || text===' Network & System Administration'
                    || text===' Web Research'
                    || text===' Other - IT & Networking'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Writing'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Academic Writing & Research'
                    || text===' Article & Blog Writing'
                    || text===' Copywriting'
                    || text===' Creative Writing'
                    || text===' Editing & Proofreading'
                    || text===' Grant Writing'
                    || text===' Resumes & Cover Letters'
                    || text===' Technical Writing'
                    || text===' Web Content'
                    || text===' Other - Writing'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Sales & Marketing'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Display Advertising'
                    || text===' Email & Marketing Automation'
                    || text===' Lead Generation'
                    || text===' Market & Customer Research'
                    || text===' Marketing Strategy'
                    || text===' Public Relations'
                    || text===' SEM - Search Engine Marketing'
                    || text===' SEO - Search Engine Optimization'
                    || text===' SMM - Social Media Marketing'
                    || text===' Telemarketing & Telesales'
                    || text===' Other - Sales & Marketing'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Data Science & Analytics'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' A/B Testing'
                    || text===' Data Visualization'
                    || text===' Data Extraction / ETL'
                    || text===' Data Mining & Management'
                    || text===' Machine Learning'
                    || text===' Quantitative Analysis'
                    || text===' Other - Data Science & Analytics'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Translation'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' General Translation'
                    || text===' Legal Translation'
                    || text===' Medical Translation'
                    || text===' Technical Translation'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Engineering & Architecture'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' 3D Modeling & CAD'
                    || text===' Architecture'
                    || text===' Chemical Engineering'
                    || text===' Civil & Structural Engineering'
                    || text===' Contract Manufacturing'
                    || text===' Electrical Engineering'
                    || text===' Interior Design'
                    || text===' Mechanical Engineering'
                    || text===' Product Design'
                    || text===' Other - Engineering & Architecture'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Legal'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Contract Law'
                    || text===' Corporate Law'
                    || text===' Criminal Law'
                    || text===' Family Law'
                    || text===' Intellectual Property Law'
                    || text===' Paralegal Services'
                    || text===' Other - Legal'){

                    $(this).parent().show();
                }

            });
        }


        if($(this).val()==='Accounting & Consulting'){
            $('#search_form_subcategory').find('label').each(function(){
                text=$(this).text();

                if(text===' Accounting'
                    || text===' Financial Planning'
                    || text===' Human Resources'
                    || text===' Management Consulting'
                    || text===' Other - Accounting & Consulting'){

                    $(this).parent().show();
                }

            });
        }

    });
});

