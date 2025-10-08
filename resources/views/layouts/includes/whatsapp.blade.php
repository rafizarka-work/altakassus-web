<!-- WhatsApp Floating Button -->
@php
    // Set WhatsApp number based on current route
    $whatsappNumber = '966544977774'; // Default number
    $whatsappMessage = 'مرحباً، أود الاستفسار عن خدماتكم';

    if (request()->routeIs('contractors')) {
        $whatsappNumber = '966544977774'; // Contracting department number
        $whatsappMessage = app()->getLocale() == 'ar'
            ? 'مرحباً، أود الاستفسار عن خدمات المقاولات'
            : 'Hello, I would like to inquire about contracting services';
    } elseif (request()->routeIs('conditioning')) {
        $whatsappNumber = '966532493322'; // HVAC department number
        $whatsappMessage = app()->getLocale() == 'ar'
            ? 'مرحباً، أود الاستفسار عن خدمات التكييف'
            : 'Hello, I would like to inquire about HVAC services';
    } else {
        $whatsappMessage = app()->getLocale() == 'ar'
            ? 'مرحباً، أود الاستفسار عن خدماتكم'
            : 'Hello, I would like to inquire about your services';
    }

    $whatsappUrl = 'https://wa.me/' . $whatsappNumber . '?text=' . urlencode($whatsappMessage);
@endphp

<a href="{{ $whatsappUrl }}" target="_blank" class="whatsapp-float" aria-label="Contact us on WhatsApp">
    <svg viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
        <path d="M16 0c-8.837 0-16 7.163-16 16 0 2.825 0.737 5.607 2.137 8.048l-2.137 7.952 7.933-2.127c2.42 1.37 5.173 2.127 8.067 2.127 8.837 0 16-7.163 16-16s-7.163-16-16-16zM16 29.467c-2.482 0-4.908-0.646-7.07-1.87l-0.507-0.292-5.247 1.405 1.405-5.234-0.321-0.519c-1.305-2.164-1.993-4.663-1.993-7.223 0-7.51 6.11-13.621 13.621-13.621s13.621 6.11 13.621 13.621-6.11 13.621-13.621 13.621zM21.387 18.227c-0.282-0.141-1.663-0.82-1.92-0.914-0.257-0.094-0.444-0.141-0.632 0.141s-0.726 0.914-0.889 1.102c-0.163 0.188-0.326 0.212-0.608 0.071s-1.186-0.437-2.258-1.393c-0.834-0.744-1.398-1.663-1.561-1.945s-0.017-0.434 0.124-0.574c0.127-0.127 0.282-0.33 0.423-0.495s0.188-0.282 0.282-0.47c0.094-0.188 0.047-0.353-0.024-0.495s-0.632-1.522-0.866-2.086c-0.228-0.548-0.459-0.473-0.632-0.482-0.163-0.008-0.351-0.010-0.539-0.010s-0.492 0.071-0.75 0.353c-0.257 0.282-0.984 0.962-0.984 2.345s1.008 2.717 1.148 2.905c0.141 0.188 1.98 3.024 4.795 4.240 0.671 0.289 1.195 0.462 1.603 0.591 0.674 0.213 1.287 0.183 1.772 0.111 0.541-0.081 1.663-0.679 1.897-1.335s0.234-1.218 0.164-1.335c-0.071-0.117-0.257-0.188-0.539-0.33z"/>
    </svg>
</a>

<style>
.whatsapp-float {
    position: fixed;
    width: 60px;
    height: 60px;
    bottom: 40px;
    {{ app()->getLocale() == 'ar' ? 'left: 40px;' : 'right: 40px;' }}    background-color: #25d366;
    color: #FFF;
    border-radius: 50px;
    text-align: center;
    font-size: 30px;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    z-index: 9999;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
}

.whatsapp-float:hover {
    background-color: #128c7e;
    color: #FFF;
    text-decoration: none;
    transform: scale(1.1);
    box-shadow: 2px 2px 15px rgba(0, 0, 0, 0.4);
}

.whatsapp-float svg {
    width: 35px;
    height: 35px;
}

/* Responsive */
@media screen and (max-width: 767px) {
    .whatsapp-float {
        width: 50px;
        height: 50px;
        bottom: 20px;
        {{ app()->getLocale() == 'ar' ? 'left: 20px;' : 'right: 20px;' }}
    }

    .whatsapp-float svg {
        width: 28px;
        height: 28px;
    }
}
</style>
