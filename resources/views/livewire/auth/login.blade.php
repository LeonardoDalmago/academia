<div class="flex flex-col gap-6 items-center">
    <img 
        src="{{ asset('storage/logo.png') }}" 
        alt="Logo CT do Dalmago" 
        class="w-32 h-auto mx-auto mb-2"
    />

    <x-auth-header 
        :title="__('Bem-vindo ao CT do Dalmago')" 
        :description="__('Entre com seu e-mail e senha para acessar seus treinos e acompanhar seu progresso')" 
    />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="login" class="flex flex-col gap-6 w-full max-w-sm">
        <flux:input
            wire:model="email"
            :label="__('E-mail')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="exemplo@ctdalmago.com"
        />
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Senha')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Digite sua senha')"
                viewable
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Esqueceu sua senha?') }}
                </flux:link>
            @endif
        </div>
        <flux:checkbox wire:model="remember" :label="__('Manter-me conectado')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">
                {{ __('Entrar') }}
            </flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            <span>{{ __('Ainda não tem conta?') }}</span>
            <flux:link :href="route('register')" wire:navigate>
                {{ __('Cadastre-se') }}
            </flux:link>
        </div>
    @endif
</div>
