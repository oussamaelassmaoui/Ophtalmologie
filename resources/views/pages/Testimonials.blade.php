<div class="row">
    @foreach ($Testimonials as $Testimonial)
        <div class="col">
            <div class="card">
                <div class="header">

                    <div>
                        <div class="stars">

                        </div>
                        <p class="name">{{ $Testimonial->name }} </p>
                    </div>
                </div>
                <p class="message">
                    {{ $Testimonial->text }}
                </p>
            </div>
            <div class="div-poles"></div>
        </div>
    @endforeach
</div>
<div class="div-dexcellence-emptiness"></div>
{{ $Testimonials->links() }}
<style>
    .card {
        background-color: #1a4971;
        padding: 2rem;
        max-width: 320px;
        border-radius: 10px;
        box-shadow: 0 20px 30px -20px rgba(5, 5, 5, 0.24);
    }





    .stars {
        display: flex;
        justify-content: center;
        grid-gap: 0.125rem;
        gap: 0.125rem;
        color: rgba(34, 197, 94, 1);
    }



    .name {
        margin-top: 0.25rem;
        font-size: 1.125rem;
        line-height: 1.75rem;
        font-weight: 600;
        --tw-text-opacity: 1;
        color: rgb(255, 255, 255);
    }

    .message {
        overflow: hidden;
        display: -webkit-box;
        -webkit-box-orient: vertical;
        margin-top: 1rem;
        color: rgb(255, 255, 255);
    }
</style>
