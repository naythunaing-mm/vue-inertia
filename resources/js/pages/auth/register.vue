<template>
    <div
        class="d-flex justify-content-center align-items-center min-vh-100 bg-light"
    >
        <div class="card shadow-lg border-0 w-100" style="max-width: 420px">
            <div class="card-body p-4">
                <div class="text-center mb-4">
                    <h3 class="fw-bold text-primary">Create Account</h3>
                    <p class="text-muted small">
                        Join our community and start chatting today!
                    </p>
                </div>

                <form @submit.prevent>
                    <div class="mb-3">
                        <label for="name" class="form-label fw-semibold"
                            >Full Name</label
                        >
                        <input
                            type="text"
                            class="form-control form-control-lg"
                            id="name"
                            placeholder="Enter your name"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label fw-semibold"
                            >Email address</label
                        >
                        <input
                            type="email"
                            class="form-control form-control-lg"
                            id="email"
                            placeholder="Enter your email"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label fw-semibold"
                            >Password</label
                        >
                        <input
                            type="password"
                            class="form-control form-control-lg"
                            id="password"
                            placeholder="Enter your password"
                        />
                    </div>

                    <div
                        class="d-flex justify-content-between align-items-center mb-3"
                    >
                        <div class="form-check">
                            <input
                                type="checkbox"
                                class="form-check-input"
                                id="remember"
                            />
                            <label
                                class="form-check-label small"
                                for="remember"
                            >
                                Remember me
                            </label>
                        </div>
                        <a
                            href="#"
                            class="small text-decoration-none text-primary"
                            >Forgot password?</a
                        >
                    </div>

                    <button
                        type="submit"
                        class="btn btn-primary w-100 btn-lg shadow-sm"
                    >
                        Register
                    </button>

                    <div class="text-center mt-3">
                        <p class="small text-muted mb-0">
                            Already have an account?
                            <a
                                href="/login"
                                class="text-primary fw-semibold text-decoration-none"
                                >Login</a
                            >
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Register",
};
</script>
