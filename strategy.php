<?php include 'includes/header.php'; ?>
<div class="min-h-screen flex flex-col bg-background">
    <div class="mb-5 relative overflow-hidden isolate bg-secondary text-secondary-foreground">


        <div class="relative z-10">
            <img class="w-100" src="assets/images/Strategy.jpg" alt="">
            <!-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center"
                    style="position: absolute; z-index: 99999; bottom: 0px;">
                    <div style="opacity: 1; transform: none;">
                        <h1 class="font-display font-bold text-white text-4xl md:text-5xl lg:text-6xl leading-[1.05] mt-6 max-w-3xl mx-auto">About us
                            <span class="gradient-text">right</span></h1>
                    </div>
                </div> -->
        </div>
    </div>
    <section class="mb-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div>


                


                <div class="space-y-4">
                    <h4 class="font-display font-semibold">
                        Our Strategy</h4>
                    <p class="">VALLESOFT is a
                        Global IT consulting company -established in the year 2003 specialize in Web-to-Enterprise
                        Integration, Industry Specific Solutions and Strategic Outsourcing. We offer software
                        development, implementation, web optimization and maintenance services for e-business,
                        enterprise, and embedded applications.</p>
                </div>

            </div>

        </div>
    </section>
    <section class="mb-5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- FILTER BUTTONS -->
            <div class="flex flex-wrap items-center gap-2  mb-4">

                <button type="button"
                    class="filter-btn px-4 py-2 rounded-full text-sm font-medium border transition-all bg-primary text-primary-foreground border-primary ring-glow"
                    data-filter="all">
                    Our Values
                </button>

                <button type="button"
                    class="filter-btn px-4 py-2 rounded-full text-sm font-medium border transition-all bg-card text-muted-foreground border-border hover:text-foreground hover:border-primary/40"
                    data-filter="mission">
                    Mission Statement
                </button>

                <button type="button"
                    class="filter-btn px-4 py-2 rounded-full text-sm font-medium border transition-all bg-card text-muted-foreground border-border hover:text-foreground hover:border-primary/40"
                    data-filter="vision">
                    Vision Statement
                </button>

            </div>


            <!-- ITEMS -->
            <div class="">

                <!-- OUR VALUES -->
                <div class="space-y-2 project-item " data-category="all">

                    <h4 class="font-display text-xl font-semibold">
                        Our Values
                    </h4>

                    <p>
                        We value our Stakeholders and Clients but above all we value 'Ethics'. ValleSoft Value
                        Ethics.
                    </p>

                </div>


                <!-- MISSION -->
                <div class="space-y-2 project-item hidden" data-category="mission">

                    <h4 class="font-display text-xl font-semibold">
                        Mission Statement
                    </h4>

                    <p>
                        Vallesoft is committed to the continuous improvement of its professional services; and
                        endeavors to provide opportunities for highly qualified professionals to apply sustainable
                        solutions for betterment of stakeholders.
                    </p>

                </div>


                <!-- VISION -->
                <div class="space-y-2 project-item hidden" data-category="vision">

                    <h4 class="font-display text-xl font-semibold">
                        Vision Statement
                    </h4>

                    <p>
                        To continuously improve the world-wide rating among the top Information and technology
                        solutions consulting firms, pioneer state of the technological solutions and provide the
                        best professional service value regardless of project size or profitability.
                    </p>

                </div>

            </div>

        </div>
    </section>


</div>
<?php include 'includes/contact_us.php'; ?>
<?php include 'includes/footer.php'; ?>