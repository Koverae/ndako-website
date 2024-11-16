<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mt-1 d-lg-flex gap-2">
        
        <input type="text" wire:model="name" class="form-control k-input mb-lg-0 mb-2" placeholder="Enter your name" required>
        <span>
            @error('name') <span class="error">{{ $message }}</span> @enderror 
        </span>
        <input type="email" wire:model="email" class="form-control k-input mb-lg-0 mb-2" placeholder="Enter your email" required>
        <span>
            @error('email') <span class="error">{{ $message }}</span> @enderror 
        </span>
        <button class="btn k-primary p-2 fw-bold ml-2" wire:click="save">Sign Up for Updates</button>
    </div>
    
    @if($msg)
    <div class="mt-2 thanks" style="display: none;">
        <h4>Thank you for signing up! 🎉</h4>
        <p class="mt-2 fs-5">
            You’re one step closer to revolutionizing your property management experience. Stay tuned for updates! 🚀
        </p>
    </div>
    @endif
</div>
