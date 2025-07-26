<div>
    <div class="modal fade" id="loginModal" wire:ignore.self tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Sign In</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body profile-login-inr">
                    <form wire:submit.prevent="login">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" wire:model.lazy="email"
                                placeholder="Enter your email" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" wire:model.lazy="password"
                                placeholder="Enter your password" required>
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <div class="prof-login-out">
                            <div class="main-btn-out">
                                <button type="submit" class="btn main-btn">Sign In</button>
                            </div>
                        </div>
                    </form>

                    <div class="dont-account">
                        <div class="already-account">
                            <h6>Don’t have an account yet? <br>
                                <button class="btn btn-have-account" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#registerModal">Sign up</button>
                                for free
                            </h6>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" wire:ignore.self tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Sign Up</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body profile-login-inr">
                    <form wire:submit.prevent="register">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" wire:model.lazy="name"
                                placeholder="Enter your name" required>
                            <i class="fa-regular fa-user input-icon"></i>
                        </div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" wire:model.lazy="email"
                                placeholder="Enter your email" required>
                            <i class="fas fa-envelope input-icon"></i>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" wire:model.lazy="password"
                                placeholder="Enter your password" required>
                            <i class="fas fa-lock input-icon"></i>
                        </div>
                        <div class="prof-login-out">
                            <div class="main-btn-out">
                                <button type="submit" class="btn main-btn">Register</button>
                            </div>
                        </div>
                    </form>

                    <div class="dont-account">
                        <div class="already-account">
                            <h6>Already have an account? <br>
                                <button class="btn btn-have-account" data-bs-dismiss="modal" data-bs-toggle="modal"
                                    data-bs-target="#loginModal">Sign in</button>
                            </h6>
                        </div>
                        <div class="forgot-password">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
