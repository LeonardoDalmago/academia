<div class="flex flex-col gap-6 items-center">
    <img 
        src="{{ asset('storage/logo.png') }}" 
        alt="Logo CT do Dalmago" 
        class="w-32 h-auto mx-auto mb-2"
    />

    <x-auth-header 
        :title="__('Crie sua conta no CT do Dalmago')" 
        :description="__('Preencha seus dados abaixo para começar seus treinos e acompanhar sua evolução')" 
    />

    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6 w-full max-w-sm">
        <flux:input
            wire:model="name"
            :label="__('Nome completo')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Digite seu nome completo')"
        />
        <flux:input
            wire:model="email"
            :label="__('E-mail')"
            type="email"
            required
            autocomplete="email"
            placeholder="exemplo@ctdalmago.com"
        />
        <flux:input
            wire:model="password"
            :label="__('Senha')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Crie uma senha segura')"
            viewable
        />
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirmar senha')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Repita a senha')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Criar conta') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Já possui uma conta?') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('Entrar') }}</flux:link>
    </div>
</div>
