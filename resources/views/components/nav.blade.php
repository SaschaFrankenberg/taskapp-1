<header class="bg-neutral text-neutral-content">
    <nav class="mx-auto flex max-w-5xl items-center justify-between px-4 py-4">
        <a href="/" class="text-xl font-bold {{ request()->is('/') ? '' : 'opacity-80 hover:opacity-100' }}">
            Task <span class="text-primary">App</span>
        </a>
        <div class="flex items-center gap-3">
            <a href="/index"
               class="text-sm" {{ request()->is('/') ? '' : 'opacity-80 hover:opacity-100' }}">
            Index
        </a>

            <span class="text-sm opacity-80">Log in</span>
            <span class="btn btn-primary btn-sm">Register</span>
        </div>
    </nav>
</header>
 