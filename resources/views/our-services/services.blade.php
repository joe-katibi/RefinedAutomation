<div class="container-fluid service pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Our Services</h4>
            @foreach($services as $service)
            <h1 class="display-5 mb-4">{{ $service->slogan}}</h1>
            <p class="mb-0">{{ $service->description}}
            </p>
            @endforeach
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/webcustom.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Custom Website Development</a>
                        <p class="mb-4">Our custom website development services are designed to bring your unique vision to life. We focus on creating tailored, user-friendly, and fully responsive websites that reflect your brand's identity and meet your business needs. Whether you need a sleek landing page, a robust e-commerce platform, or a dynamic web application, our team of experts combines design aesthetics with cutting-edge functionality to deliver an exceptional digital experience. From concept to launch, we ensure every element is optimized for performance, scalability, and engagement, helping you connect with your audience and achieve measurable success online.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/web-based-systems.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Web-Based System Solutions</a>
                        <p class="mb-4">Our web-based system solutions empower businesses to streamline operations, improve collaboration, and enhance data accessibility. Built to scale with your organization’s needs, these systems enable you to manage workflows, track performance, and automate processes, all within a secure online environment. With an emphasis on flexibility and integration, we create solutions that fit seamlessly into your existing infrastructure, whether it's a CRM, ERP, or custom dashboard. Our team focuses on delivering intuitive interfaces, robust functionality, and top-tier security, ensuring your web-based systems not only support but accelerate your business objectives.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/Process-automation.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Process Automation</a>
                        <p class="mb-4">Our process automation solutions are designed to help businesses reduce manual work, enhance accuracy, and achieve greater efficiency. By automating repetitive and time-consuming tasks, we allow your team to focus on high-impact activities that drive growth. From data entry and reporting to customer communication and workflow management, our automation services streamline operations while minimizing human error. Using advanced tools and technologies, we customize automation to your specific processes, ensuring seamless integration and maximum return on investment. Embrace a faster, smarter way to work with our tailored process automation solutions.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/api-intergration.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Custom APIs & Integration Services</a>
                        <p class="mb-4">Our Custom APIs & Integration Services connect your software systems, enabling seamless communication between platforms and optimizing your workflow. Whether you need to integrate third-party services, synchronize data across multiple applications, or create a custom API tailored to your business logic, we provide solutions that enhance interoperability and data consistency. Our team ensures secure, scalable, and efficient API development, making it easy to bridge your existing software with new functionalities. With our integration services, we help you streamline operations, improve data accuracy, and enhance overall system performance, enabling your business to operate as a unified digital ecosystem.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/analytics.png" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Data Analytics & Visualization</a>
                        <p class="mb-4">Our Data Analytics & Visualization services transform raw data into actionable insights and clear visual representations. We empower your business with the tools to uncover trends, identify patterns, and make data-driven decisions quickly and confidently. From dashboards that track key performance indicators in real-time to interactive reports that offer in-depth analysis, we design visualizations that are intuitive, customizable, and easy to interpret. Whether it’s sales metrics, customer behavior, or operational efficiencies, our analytics and visualization solutions provide you with a comprehensive view of your data, enabling strategic planning and enhancing overall decision-making processes.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="img/business-consulting.jpg" class="img-fluid rounded-top w-100" alt="Image">
                    </div>
                    <div class="rounded-bottom p-4">
                        <a href="#" class="h4 d-inline-block mb-4">Business Consulting</a>
                        <p class="mb-4">Our Business Consulting service is focused on empowering your growth through strategic digital transformation. We thoroughly analyze your business processes to uncover inefficiencies and create a tailored roadmap for streamlining operations. By identifying key areas for automation, we help you eliminate bottlenecks and improve productivity. Our experts design and implement custom automation strategies that optimize your workflows, reduce manual effort, and support sustainable growth, ensuring your business stays competitive in a digital-first world.
                        </p>
                        {{-- <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
