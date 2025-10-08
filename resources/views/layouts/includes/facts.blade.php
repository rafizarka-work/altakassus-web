<!-- Facts Section Starts -->
<section id="facts" class="facts">
    <div class="section-overlay">
        <!-- Container Starts -->
        <div class="container">
            <!-- Main Heading Starts -->
            <div class="text-center top-text">
                <h1>{{ __($ns . '.facts.title') }}</h1>
                <h4>{{ __($ns . '.facts.subtitle') }}</h4>
            </div>
            <!-- Main Heading Starts -->
            <!-- Fact Badges Starts -->
            <div class="fact-badges">
                <div class="row">
                    @php
                        $facts = Lang::get($ns . '.facts.items');
                    @endphp

                    @foreach ($facts as $fac)
                        <div class="col-xs-12 col-sm-6 col-md-4 text-center">
                            <i class="{{ $fac['icon'] }}"></i>
                            <h2>
                                <span>
                                    <strong class="badges-counter" data-count="{{ $fac['count'] }}">0</strong>
                                </span>
                            </h2>
                            <h4>{{ $fac['label'] }}</h4>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Fact Badges Ends -->
        </div>
        <!-- Container Ends -->
    </div>
</section>
<!-- facts Section Ends -->

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.badges-counter');
    let animated = false;

    function animateCounters() {
        if (animated) return;

        counters.forEach(counter => {
            const target = counter.getAttribute('data-count');
            const number = parseInt(target.replace(/\D/g, ''));
            const suffix = target.replace(/[0-9]/g, '');
            const duration = 2000;
            const increment = number / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < number) {
                    counter.textContent = Math.floor(current) + suffix;
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = target;
                }
            };

            updateCounter();
        });

        animated = true;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounters();
            }
        });
    }, { threshold: 0.5 });

    const factsSection = document.getElementById('facts');
    if (factsSection) {
        observer.observe(factsSection);
    }
});
</script>
