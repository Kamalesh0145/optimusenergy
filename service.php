<?php include 'includes/header.php';

// Get the service ID from URL
$service_id = isset($_GET['id']) ? intval($_GET['id']) : 1;

// Service data array
$services = [
    1 => [
        'title' => 'HARMONICS ANALYSIS AND STUDY',
        'icon' => 'img/HARMONICS 1.png',
        'main_image' => 'img/HARMONICS 1.png',
        'short_desc' => 'Analyze and mitigate power quality issues caused by harmonic distortions.',
        'full_desc' => 'Harmonics study refers to an analysis of the harmonics present in an electrical system. It involves examining and assessing the distortion or multiples of the fundamental frequency in the electrical waveform. This study helps understand and mitigate issues caused by harmonics, such as equipment malfunctions, power quality problems, or interference in electronic devices. Our comprehensive harmonics analysis identifies the source and severity of these issues, providing you with actionable solutions to ensure optimal system performance.',
        'benefits' => [
            'Comprehensive harmonic spectrum analysis and measurement',
            'Identification of harmonic sources and their impact',
            'Prevention of equipment malfunction and failure',
            'Improved power quality and system efficiency',
            'Compliance with IEEE 519 and other industry standards',
            'Reduced interference in sensitive electronic devices',
            'Extended equipment life and reduced maintenance costs'
        ],
        'process' => [
            'Initial site assessment and data collection',
            'Power quality monitoring and measurement using advanced analyzers',
            'Harmonic spectrum analysis to identify distortion levels',
            'Root cause identification of harmonic sources',
            'Solution design including filters and corrective devices',
            'Implementation planning and execution',
            'Post-implementation verification and reporting'
        ]
    ],
    2 => [
        'title' => 'ENERGY AUDIT AND ASSESSMENT',
        'icon' => 'img/ENERGY AUDIT2.png',
        'main_image' => 'img/ENERGY AUDIT2.png',
        'short_desc' => 'Evaluate energy consumption to identify inefficiencies across your facilities.',
        'full_desc' => 'An energy audit is a comprehensive assessment of how energy is used in industrial and domestic sectors. It involves analyzing energy consumption patterns, identifying areas of inefficiency, and suggesting measures to optimize energy use. We serve the energy audit under the guidance of well-qualified BEE (Bureau of Energy Efficiency) accredited energy auditors. Our systematic approach helps you understand where and how energy is being used, identify opportunities for improvement, and implement cost-effective energy-saving measures that deliver measurable results.',
        'benefits' => [
            'Conducted by BEE accredited energy auditors',
            'Detailed energy consumption pattern analysis',
            'Identification of inefficiencies in industrial and domestic sectors',
            'Cost-saving recommendations with ROI calculations',
            'Optimized energy usage and reduced operational costs',
            'Reduced carbon footprint and environmental impact',
            'Enhanced operational efficiency and productivity',
            'Compliance with energy regulations and standards'
        ],
        'process' => [
            'Pre-audit preparation and historical data gathering',
            'On-site inspection by BEE accredited auditors',
            'Comprehensive energy consumption measurements',
            'Analysis of consumption patterns and inefficiencies',
            'Identification of energy-saving opportunities',
            'Detailed audit report with prioritized recommendations',
            'Implementation support and monitoring',
            'Post-implementation verification and savings validation'
        ]
    ],
    3 => [
        'title' => 'MOTOR VIBRATION ANALYSIS SYSTEM',
        'icon' => 'img/MOTOR VIBRATION3.png',
        'main_image' => 'img/MOTOR VIBRATION3.png',
        'short_desc' => 'Detect mechanical issues early to prevent breakdowns and extend equipment life.',
        'full_desc' => 'Motor vibration analysis involves studying the vibrations produced by an electric motor to assess its condition and performance. By analyzing these vibrations, experts can detect potential faults such as misalignment, imbalance, wear, or other issues within the motor or connected machinery. This analysis helps in predictive maintenance, preventing breakdowns, and ensuring optimal motor operations. Our advanced vibration monitoring systems provide real-time insights into your equipment health, enabling proactive maintenance decisions.',
        'benefits' => [
            'Early detection of misalignment and imbalance',
            'Identification of bearing wear and defects',
            'Detection of mechanical looseness and structural issues',
            'Predictive maintenance capabilities',
            'Prevention of unexpected breakdowns and failures',
            'Reduced unplanned downtime and production losses',
            'Extended motor and machinery life',
            'Optimized maintenance schedules and costs',
            'Improved operational safety and reliability'
        ],
        'process' => [
            'Initial equipment assessment and baseline establishment',
            'Installation of vibration monitoring sensors',
            'Continuous or periodic vibration data collection',
            'Comprehensive vibration analysis and diagnostics',
            'Fault identification (misalignment, imbalance, wear)',
            'Trend analysis and condition monitoring',
            'Detailed reporting with maintenance recommendations',
            'Implementation support and follow-up monitoring'
        ]
    ],
    4 => [
        'title' => 'ENERGY MANAGEMENT SYSTEM STUDY',
        'icon' => 'img/ENERGY MANAGEMENT4.png',
        'main_image' => 'img/ENERGY MANAGEMENT4.png',
        'short_desc' => 'Monitor and optimize energy consumption efficiently.',
        'full_desc' => 'EMS is a comprehensive system used to monitor, control, and optimize the performance of generation, transmission, and consumption of energy. EMS can be applied in various contexts such as utility grids, industrial facilities, commercial buildings, and residential environments. Our Energy Management System solutions integrate advanced hardware, software, and services to provide real-time visibility and control over your energy usage, enabling data-driven decisions for optimal energy performance.',
        'benefits' => [
            'Real-time monitoring of energy generation and consumption',
            'Comprehensive control and optimization of energy systems',
            'Applicable across utility grids, industrial, commercial, and residential sectors',
            'Automated reporting and advanced analytics',
            'Peak demand management and load optimization',
            'Significant energy cost reduction',
            'Enhanced operational efficiency and productivity',
            'Improved sustainability and carbon footprint reduction',
            'ISO 50001 compliance support',
            'Integration with existing infrastructure'
        ],
        'process' => [
            'Comprehensive energy audit and baseline establishment',
            'System design tailored to your facility requirements',
            'Hardware and software specification and procurement',
            'Professional installation and integration',
            'System configuration, calibration, and testing',
            'User training and comprehensive documentation',
            'Commissioning and go-live support',
            'Ongoing monitoring, support, and optimization'
        ]
    ],
    5 => [
        'title' => 'IoT DEVICE CONNECTIVITY SYSTEM',
        'icon' => 'img/IoT DEVICE5.png',
        'main_image' => 'img/IoT DEVICE5.png',
        'short_desc' => 'Connect devices for smarter operations.',
        'full_desc' => 'IoT (Internet of Things) means a network of interconnected devices that communicate and exchange data with each other through the internet. These devices, embedded with sensors, software, and connectivity, enable them to collect and share information, often autonomously, creating opportunities for automation, monitoring, and remote control. IoT applications span across industrial automation, smart buildings, energy management, and various other sectors, transforming how businesses operate and make decisions in real-time.',
        'benefits' => [
            'Network of interconnected devices for seamless communication',
            'Real-time data collection and exchange through the internet',
            'Autonomous operation with embedded sensors and software',
            'Automation of processes and workflows',
            'Remote monitoring and control capabilities',
            'Enhanced operational efficiency and productivity',
            'Predictive maintenance and fault detection',
            'Data-driven decision making with real-time insights',
            'Improved safety and security monitoring',
            'Cost reduction through optimized operations',
            'Scalable solutions for industrial and commercial applications'
        ],
        'process' => [
            'Comprehensive requirements analysis and feasibility study',
            'IoT architecture design and network planning',
            'Selection of appropriate sensors and IoT devices',
            'Device procurement and hardware setup',
            'Network infrastructure setup and configuration',
            'IoT platform integration and connectivity establishment',
            'Software configuration and automation programming',
            'Comprehensive testing and validation',
            'User training and documentation',
            'Deployment and commissioning',
            'Ongoing monitoring, support, and optimization'
        ]
    ],
    6 => [
        'title' => 'POWER QUALITY CONTROL SYSTEM',
        'icon' => 'img/POWER QUALITY6.png',
        'main_image' => 'img/POWER QUALITY6.png',
        'short_desc' => 'Ensure stable and reliable power for your business operations.',
        'full_desc' => 'Power quality refers to the quality of electrical power supply, including factors such as voltage stability, frequency stability, harmonics, surges, and interruptions. Poor power quality can lead to equipment malfunction, downtime, and increased maintenance costs for businesses. The major solution to improve power quality is power factor correction devices that improve the efficiency of electrical systems by correcting the ratio of real power to apparent power. This reduces energy losses and improves voltage stability. Harmonic filters are used to mitigate harmonic distortion caused by nonlinear loads such as variable frequency drives and computers. These filters remove or reduce harmonic currents to improve overall power quality.',
        'benefits' => [
            'Improved voltage and frequency stability',
            'Power factor correction for enhanced efficiency',
            'Harmonic distortion mitigation and filtering',
            'Protection against surges and interruptions',
            'Prevention of equipment malfunction and failures',
            'Reduced downtime and production losses',
            'Lower maintenance costs and extended equipment life',
            'Reduced energy losses and lower electricity bills',
            'Improved system efficiency and performance',
            'Protection for sensitive electronic equipment',
            'Compliance with utility and industry standards'
        ],
        'process' => [
            'Comprehensive power quality assessment and monitoring',
            'Problem identification and root cause analysis',
            'Load analysis and harmonic measurement',
            'Solution design (APFC panels, harmonic filters, surge protection)',
            'Equipment selection and specification',
            'Professional procurement and installation',
            'System integration and commissioning',
            'Testing and performance verification',
            'Ongoing monitoring and reporting',
            'Maintenance support and optimization'
        ]
    ],
    7 => [
        'title' => 'SMART GRID MONITORING SYSTEM',
        'icon' => 'img/SMART GRID7.png',
        'main_image' => 'img/SMART GRID7.png',
        'short_desc' => 'Modernize your electrical network for better reliability and efficiency.',
        'full_desc' => 'Smart grid technology represents the next generation of electrical distribution networks, integrating advanced sensors, communication systems, automation, and control mechanisms to create an intelligent and responsive power infrastructure. Our smart grid monitoring solutions enable utilities and industries to achieve real-time visibility, automated fault management, and predictive analytics to optimize grid performance, reduce losses, and improve reliability. By modernizing your electrical network with smart grid technology, you can enhance operational efficiency, integrate renewable energy sources seamlessly, and provide better service quality to end users.',
        'benefits' => [
            'Real-time monitoring of grid parameters and performance',
            'Automated fault detection, isolation, and restoration',
            'Advanced load balancing and distribution optimization',
            'Seamless integration with renewable energy sources',
            'Reduced outage duration and faster service restoration',
            'Improved energy efficiency and loss reduction',
            'Enhanced voltage and frequency regulation',
            'Predictive maintenance capabilities',
            'Better demand response management',
            'Comprehensive data analytics and reporting',
            'Improved grid reliability and power quality',
            'Remote monitoring and control capabilities'
        ],
        'process' => [
            'Comprehensive grid infrastructure assessment',
            'System requirements analysis and planning',
            'Smart grid architecture design',
            'Advanced metering infrastructure (AMI) deployment',
            'Sensor and communication network installation',
            'SCADA and control system integration',
            'Data management platform setup',
            'System testing, validation, and commissioning',
            'Operator training and documentation',
            'Go-live support and monitoring',
            'Continuous optimization and improvement'
        ]
    ],
    8 => [
        'title' => 'RENEWABLE ENERGY INTEGRATION PLAN',
        'icon' => 'img/RENEWABLE ENERGY8.png',
        'main_image' => 'img/RENEWABLE ENERGY8.png',
        'short_desc' => 'Adopt solar, wind, and other green energy sources effectively.',
        'full_desc' => 'Renewable energy integration is the strategic process of incorporating clean energy sources such as solar photovoltaic systems, wind turbines, biomass, and other sustainable technologies into your existing electrical infrastructure. As businesses and industries increasingly focus on sustainability and reducing carbon emissions, renewable energy has become essential for both environmental responsibility and economic benefits. Our comprehensive renewable energy integration services encompass detailed feasibility studies, optimized system design, seamless grid connection, and ongoing performance monitoring to ensure you maximize the benefits of clean energy while maintaining reliable power supply and achieving attractive returns on investment.',
        'benefits' => [
            'Significant reduction in energy costs and electricity bills',
            'Lower carbon footprint and environmental impact',
            'Enhanced energy independence and security',
            'Protection against rising energy costs',
            'Eligibility for government incentives, tax benefits, and rebates',
            'Improved corporate social responsibility and brand image',
            'Long-term cost savings and attractive ROI',
            'Contribution to sustainable development goals',
            'Reliable and clean energy generation',
            'Reduced dependence on fossil fuels',
            'Compliance with environmental regulations',
            'Increased property and asset value'
        ],
        'process' => [
            'Comprehensive site assessment and resource evaluation',
            'Detailed feasibility study and financial analysis',
            'Energy generation modeling and simulation',
            'Optimal system sizing and technology selection',
            'Detailed engineering design and planning',
            'Grid integration and interconnection planning',
            'Regulatory approvals and permits assistance',
            'Procurement support and vendor evaluation',
            'Installation oversight and quality assurance',
            'System commissioning and testing',
            'Performance monitoring and optimization',
            'Ongoing maintenance and support services'
        ]
    ],
    9 => [
        'title' => 'ENERGY STORAGE CONTROL SYSTEM',
        'icon' => 'img/ENERGY STORAGE9.png',
        'main_image' => 'img/ENERGY STORAGE9.png',
        'short_desc' => 'Efficiently store surplus electrical energy safely and reliably for long-term future use.',
        'full_desc' => 'Energy storage systems are critical components of modern energy infrastructure, enabling businesses and industries to capture and store electrical energy for strategic use when needed most. These advanced systems help optimize energy consumption patterns, reduce peak demand charges, provide reliable backup power during grid outages, and maximize the value of renewable energy installations. Our comprehensive energy storage solutions utilize cutting-edge battery technologies including lithium-ion, flow batteries, and other advanced storage systems, all integrated with sophisticated control and monitoring platforms. Whether you need to reduce electricity costs, improve power reliability, or support sustainability goals, our energy storage systems deliver measurable value and long-term benefits.',
        'benefits' => [
            'Significant peak demand reduction and demand charge savings',
            'Reliable backup power capability during outages',
            'Optimization of renewable energy utilization and storage',
            'Load shifting and time-of-use tariff optimization',
            'Grid services participation and ancillary revenue opportunities',
            'Reduced overall energy costs and improved ROI',
            'Enhanced power reliability and quality',
            'Protection against power interruptions',
            'Improved power factor and voltage stability',
            'Reduced carbon footprint through renewable integration',
            'Energy independence and security',
            'Scalable and modular solutions for future expansion'
        ],
        'process' => [
            'Comprehensive load profile and energy usage analysis',
            'Technical and financial feasibility study',
            'Storage capacity sizing and optimization',
            'Battery technology evaluation and selection',
            'System architecture design and engineering',
            'Integration planning with existing infrastructure',
            'Control system and monitoring platform design',
            'Equipment procurement and vendor coordination',
            'Professional installation and integration',
            'System commissioning and performance testing',
            'Training and operational documentation',
            'Ongoing performance monitoring and optimization',
            'Maintenance support and lifecycle management'
        ]
    ],
    10 => [
        'title' => 'PREDICTIVE MAINTENANCE CONTROL PLAN',
        'icon' => 'img/PREDICTIVE MAINTENANCE10.png',
        'main_image' => 'img/PREDICTIVE MAINTENANCE10.png',
        'short_desc' => 'Prevent downtime by identifying equipment issues before they occur.',
        'full_desc' => 'Predictive maintenance represents a paradigm shift from traditional reactive or time-based maintenance approaches to a sophisticated, condition-based strategy that leverages advanced sensors, real-time data analytics, artificial intelligence, and machine learning algorithms. By continuously monitoring equipment health parameters such as vibration, temperature, current, voltage, and other critical indicators, our predictive maintenance solutions can identify anomalies and predict potential failures days, weeks, or even months before they occur. This proactive approach enables you to schedule maintenance activities during planned downtime, avoid catastrophic failures, optimize spare parts inventory, and significantly reduce overall maintenance costs while maximizing equipment uptime and operational efficiency.',
        'benefits' => [
            'Dramatic reduction in unplanned downtime and emergency repairs',
            'Lower overall maintenance costs through optimized scheduling',
            'Extended equipment life through timely interventions',
            'Optimized spare parts inventory and reduced capital tied up',
            'Improved worker safety by preventing catastrophic failures',
            'Better resource allocation and maintenance planning',
            'Increased production efficiency and throughput',
            'Enhanced equipment reliability and performance',
            'Data-driven maintenance decisions',
            'Reduced mean time to repair (MTTR)',
            'Prevention of secondary equipment damage',
            'Improved overall equipment effectiveness (OEE)',
            'Better compliance with maintenance regulations'
        ],
        'process' => [
            'Comprehensive equipment assessment and criticality analysis',
            'Sensor selection and installation planning',
            'Industrial IoT sensor deployment',
            'Data collection infrastructure setup',
            'Baseline performance establishment',
            'Predictive analytics platform implementation',
            'Machine learning model development and training',
            'Failure mode and effects analysis (FMEA)',
            'Alert threshold configuration and calibration',
            'Integration with maintenance management systems',
            'Dashboard and reporting setup',
            'User training and knowledge transfer',
            'Continuous monitoring and model refinement',
            'Ongoing optimization and improvement'
        ]
    ],
    11 => [
        'title' => 'INDUSTRIAL AUTOMATION CONTROL PLAN',
        'icon' => 'img/INDUSTRIAL AUTOMATION11.png',
        'main_image' => 'img/INDUSTRIAL AUTOMATION11.png',
        'short_desc' => 'Streamline manufacturing and operational processes for higher productivity.',
        'full_desc' => 'Industrial automation is the strategic application of control systems, advanced sensors, robotics, and intelligent software to operate manufacturing equipment, industrial processes, and machinery with minimal human intervention. In today\'s competitive global market, automation has become essential for businesses seeking to improve productivity, maintain consistent product quality, enhance worker safety, and reduce operational costs. Our comprehensive industrial automation solutions encompass everything from basic process control to fully integrated smart factory systems, utilizing technologies such as programmable logic controllers (PLCs), supervisory control and data acquisition (SCADA) systems, human-machine interfaces (HMIs), industrial robots, and advanced manufacturing execution systems (MES). We help you transform your operations to achieve Industry 4.0 readiness and maintain competitive advantage.',
        'benefits' => [
            'Dramatically increased productivity and throughput',
            'Improved and consistent product quality',
            'Enhanced worker safety by reducing exposure to hazards',
            'Reduced labor costs and operational expenses',
            'Real-time process monitoring and control',
            'Minimized human errors and waste',
            'Flexible and scalable systems for future growth',
            'Better resource utilization and efficiency',
            'Improved traceability and compliance',
            'Reduced cycle times and faster production',
            'Enhanced data collection and analytics',
            'Better inventory management',
            'Increased competitiveness in the market',
            'Energy efficiency and cost savings'
        ],
        'process' => [
            'Comprehensive process analysis and workflow assessment',
            'Requirements gathering and feasibility study',
            'Automation opportunities identification',
            'System architecture design and specification',
            'Hardware selection (PLCs, sensors, actuators, robots)',
            'Software platform and programming language selection',
            'Detailed engineering and design documentation',
            'Equipment procurement and logistics',
            'System integration and installation',
            'Control logic programming and development',
            'HMI and SCADA development',
            'Factory acceptance testing (FAT)',
            'Site acceptance testing (SAT)',
            'Commissioning and go-live support',
            'Operator training and documentation',
            'Ongoing maintenance and support',
            'Continuous optimization and upgrades'
        ]
    ],
    12 => [
        'title' => 'ENERGY COMPLIANCE REGULATION PLAN',
        'icon' => 'img/ENERGY COMPLIANCE12.png',
        'main_image' => 'img/ENERGY COMPLIANCE12.png',
        'short_desc' => 'Ensure all business operations meet strict local and international energy standards.',
        'full_desc' => 'Energy compliance and regulation management is a critical aspect of modern business operations, encompassing adherence to an increasingly complex landscape of local, national, and international regulations related to energy efficiency, greenhouse gas emissions, environmental impact, and sustainability reporting. With regulatory requirements constantly evolving and becoming more stringent, organizations must proactively manage their compliance obligations to avoid penalties, maintain operational licenses, and demonstrate corporate responsibility. Our comprehensive energy compliance services help you navigate this complex regulatory environment, from initial gap analysis and policy development to certification support and ongoing compliance monitoring. We work with standards such as ISO 50001 (Energy Management Systems), ISO 14001 (Environmental Management), and various government energy efficiency schemes and regulations.',
        'benefits' => [
            'Assured regulatory compliance and risk mitigation',
            'Avoidance of penalties, fines, and legal issues',
            'ISO 50001 and ISO 14001 certification support',
            'Enhanced corporate reputation and stakeholder confidence',
            'Access to government incentives, subsidies, and rebates',
            'Competitive advantage in tenders and contracts',
            'Improved energy performance and cost savings',
            'Better environmental sustainability and reporting',
            'Enhanced market access and business opportunities',
            'Reduced regulatory and compliance risks',
            'Improved corporate governance and transparency',
            'Better preparedness for future regulations',
            'Stakeholder and investor confidence',
            'Alignment with corporate sustainability goals'
        ],
        'process' => [
            'Comprehensive regulatory requirements assessment',
            'Current compliance status evaluation',
            'Gap analysis and risk identification',
            'Compliance roadmap and action plan development',
            'Energy policy and procedure documentation',
            'Management system development and implementation',
            'Energy performance indicators (EnPI) establishment',
            'Training programs for staff and management',
            'Internal audit system setup',
            'Pre-certification readiness assessment',
            'Certification body liaison and support',
            'External audit preparation and support',
            'Corrective action implementation',
            'Ongoing compliance monitoring and reporting',
            'Management review support',
            'Continuous improvement and optimization',
            'Regulatory updates and advisory services'
        ]
    ]
];

// Get current service or default to first service
$current_service = isset($services[$service_id]) ? $services[$service_id] : $services[1];
?>

<!-- Page Header Start -->
<div class="page-header">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2><?php echo $current_service['title']; ?></h2>
      </div>
      <div class="col-12">
        <a href="index.php">Home</a>
        <a href="service.php">Services</a>
      </div>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Service Detail Start -->
<div class="service-detail mt-125">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="service-detail-content">
          <div class="service-detail-img">
            <img src="<?php echo $current_service['main_image']; ?>" alt="<?php echo $current_service['title']; ?>" style="width: 100%; border-radius: 10px; margin-bottom: 30px;">
          </div>

          <h2><?php echo $current_service['title']; ?></h2>
          <p class="lead"><?php echo $current_service['short_desc']; ?></p>

          <h3>Overview</h3>
          <p><?php echo $current_service['full_desc']; ?></p>

          <h3>Key Benefits</h3>
          <ul class="service-benefits">
            <?php foreach ($current_service['benefits'] as $benefit): ?>
              <li><i class="fa fa-check-circle"></i> <?php echo $benefit; ?></li>
            <?php endforeach; ?>
          </ul>

          <h3>Our Process</h3>
          <div class="service-process">
            <?php foreach ($current_service['process'] as $index => $step): ?>
              <div class="process-step">
                <div class="step-number"><?php echo ($index + 1); ?></div>
                <div class="step-content"><?php echo $step; ?></div>
              </div>
            <?php endforeach; ?>
    </div>

  </div>
</div>

      <div class="col-lg-4">
        <div class="sidebar">
          <div class="sidebar-widget">
            <h3>All Services</h3>
            <ul class="service-list">
              <?php foreach ($services as $id => $service): ?>
                <li class="<?php echo ($id == $service_id) ? 'active' : ''; ?>">
                  <a href="service.php?id=<?php echo $id; ?>">
                    <i class="fa fa-angle-right"></i> <?php echo $service['title']; ?>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Service Detail End -->

<?php include 'includes/footer.php'; ?>