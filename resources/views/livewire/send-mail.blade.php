<div id="formContac">    
        
    <form wire:submit.prevent="submitGECN" id="contactForm" name="sentMessage" novalidate="novalidate">
        
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Name</label>
                <input class="form-control" type="text" id="nombre" required="" placeholder="Name" wire:model="name">
                @error('name')
                <small class="form-text text-danger help-block error">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Email Address</label>
                <input class="form-control" type="email" required="" placeholder="Email Address" wire:model="email">
                @error('email')
                <small class="form-text text-danger help-block">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Phone Number</label>
                <input class="form-control" type="tel" required="" placeholder="Phone Number" wire:model="phone">
                @error('phone')
                <small class="form-text text-danger help-block">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-5 pb-2">
                <textarea class="form-control"  required="" placeholder="Message" rows="5" wire:model="message"></textarea>
                @error('message')
                <small class="form-text text-danger help-block">{{ $message }}</small></div>
                @enderror
        </div>
        <div id="success"></div>
        <div>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button>
        </div>
    </form>
    
</div>    