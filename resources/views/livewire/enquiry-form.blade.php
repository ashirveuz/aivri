<div class="col-md-7">
    <div class="contact-form">
        <h3 class="mb-4">Send us a message</h3>

        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif

        <form wire:submit.prevent="submit">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control" placeholder="John" wire:model="first_name">
                    @error('first_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control" placeholder="Doe" wire:model="last_name">
                    @error('last_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" placeholder="john@example.com" wire:model="email">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Subject</label>
                <input type="text" class="form-control" placeholder="How can we help?" wire:model="subject">
                @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-4">
                <label class="form-label">Message</label>
                <textarea class="form-control" rows="5" placeholder="Your message here..." wire:model="message"></textarea>
                @error('message')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn main-btn">Send Message</button>
        </form>
    </div>
</div>
@script
    <script>
        $wire.on('hideSuccessMessage', () => {
            setTimeout(() => {
                $('.alert-success').hide();
            }, 3000);
        });
    </script>
@endscript
