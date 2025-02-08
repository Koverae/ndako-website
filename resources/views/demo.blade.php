@extends('layouts.app')

@section('meta-tag')
<meta name="description" content="Ndako is an all-in-one hospitality platform designed for property owners, managers, and tenants. Simplify property listings, financial tracking, and guest interactions, everything you need to streamline property management." />
<meta name="keywords" content="Property Management Platform, Hospitality Software, All-in-One Property Management, Property Listings, Financial Tracking, Guest and Tenant Portal, Nairobi Property Management, Real Estate Management Tools, Rental Property Software, Tenant and Owner Solutions, Nairobi, Kenya Software, Kenya" />
@endsection

@section('page_title', "Property Management Made Easy")

@section('open-graph')
<meta name="theme-color" content="#026469">
<meta property="og:title" content="Ndako - Property Management System">
<meta property="og:image" content="{{ asset('assets/images/logo/logo-black.png') }}" />
<meta property="og:description" content="All-in-one hospitality platform" />
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.ndako.koverae.com">
@endsection

@section('content')
<section class="demo row" id="hero">
    <div class="bg-cover h-100 min-vh-100 col-12 col-lg-6 col-xl-6 d-none d-lg-block demo-left-side">
        <!-- Photo -->
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="p-4 bg-white" style="border-radius: 10px;">
              <h3 class="text-center h3">
                Why Choose Ndako?
                <br />
              </h3>
              <div class="col-lg-auto align-items-center">
                <ul style="list-style: none">
                  <li>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Manage all your bookings in one easy-to-use platform
                  </li>
                  <li style="margin-top: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Track revenue and generate financial reports at a glance
                  </li>
                  <li style="margin-top: 10px">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon text-green" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg>
                    Enhance guest satisfaction with seamless communication
                  </li>
                </ul>
              </div>
            </div>
        </div>

    </div>
    <div class="col-12 col-lg-6 col-xl-6 border-top-wide border-primary d-flex">
        <div class="container">
            <h1 class="form-headline mt0 font-weight-bold">
                Get Started | Koverae
            </h1>
            <form action="" class="">
                <span></span>
                <div style="height: 400px; overflow-y: auto; overflow-x: hidden;" >
                    <h4>Parlez nous de vous !</h4>
                    <!-- Name -->
                    <div class="mb-3">
                        <input  type="text" wire:model="name" value="{{ old('name') }}" required autocomplete="name" class="form-control" placeholder="{{ __('Nom(s) & Prénom(s)') }}">
                        @error('name') <span class="text-danger"></span> @enderror
                    </div>
                    <div class="row">
                        <!-- Email -->
                        <div class="mb-3 col-6">
                            <input  type="email" wire:model="email" value="{{ old('email') }}" required autocomplete="email" class="form-control" placeholder="Votre adresse email">
                            @error('email') <span class="text-danger"></span> @enderror
                        </div>
                        <!-- Phone -->
                        <div class="mb-3 col-6">
                            <input  type="tel" wire:model="phone" value="{{ old('phone') }}" required autocomplete="phone" class="form-control" placeholder="Votre numéro de téléphone">
                            @error('phone') <span class="text-danger"></span> @enderror
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-3">
                        <input  type="text" wire:model="address" value="{{ old('address') }}" required autocomplete="address" class="form-control" placeholder="{{ __('Votre adresse') }}">
                        @error('address') <span class="text-danger"></span> @enderror
                    </div>

                    <div class="row">
                        <!-- Country -->
                        <div class="mb-3 col-6">
                            <select wire:model="country" required autocomplete="country" class="form-control">
                                <option value="">Pays</option>
                                {{-- @foreach($countries as $key => $value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach --}}
                            </select>
                            @error('country') <span class="text-danger"></span> @enderror
                        </div>
                        <!-- City -->
                        <div class="mb-3 col-6">
                            <select wire:model="city" required autocomplete="city" class="form-control">
                                <option value="">Ville</option>
                                @if(!empty($country) && isset($cities[$country]))
                                    @foreach($cities[$country] as $city)
                                        <option value="{{ strtolower($city) }}">{{ $city }}</option>
                                    @endforeach
                                @endif
                            </select>
                            @error('city') <span class="text-danger"></span> @enderror
                        </div>
                    </div>

                    <h4>Intéressons nous à votre entreprise !</h4>

                    <!-- Company Name -->
                    <div class="mb-3">
                        <input  type="text" wire:model="company_name" value="{{ old('company_name') }}" required autocomplete="company_name" class="form-control" placeholder="{{ __('Quel est le nom de votre entreprise ?') }}">
                        @error('company_name') <span class="text-danger"></span> @enderror
                        {{-- @if($this->company_name)
                            <span><b>Votre site web :</b> https://{{ str()->slug($this->company_name) }}.koverae.com</span>
                        @endif --}}
                    </div>
                    <div class="row">
                        <!-- Prospect Position -->
                        <div class="mb-3 col-6">
                            <select wire:model="role" required autocomplete="role" class="form-control">
                                <option value="">{{ __("Quelle est votre rôle dans l'entreprise ?") }}</option>
                                <option value="owner">{{ __('Propriétaire') }}</option>
                                <option value="manager">{{ __("Gérant") }}</option>
                                <option value="cco">{{ __('Directeur commercial') }}</option>
                                <option value="employee">{{ __('Employé') }}</option>
                                <option value="others">{{ __('Autres') }}</option>
                            </select>
                            @error('role') <span class="text-danger"></span> @enderror
                        </div>
                        <!-- industry -->
                        <div class="mb-3 col-6">
                            <select wire:model="industry" required autocomplete="industy" class="form-control">
                                <option value="">{{ __("Quelle est votre secteur d'activité ?") }}</option>
                                <option {{ old('type') == 'retail_store' ? 'selected' : '' }} value="retail_store">{{ __('Commerce de détail') }}</option>
                                <option {{ old('type') == 'distribution' ? 'selected' : '' }} value="distribution">{{ __('Grande distribution') }}</option>
                                <option {{ old('type') == 'restaurant' ? 'selected' : '' }} value="restaurant">{{ __("Restauration / Bar") }}</option>
                                <option {{ old('type') == 'hotel' ? 'selected' : '' }} value="hotel">{{ __("Hôtellerie") }}</option>
                                <option {{ old('type') == 'pharmacy' ? 'selected' : '' }} value="pharmacy">{{ __('Pharmacie') }}</option>
                                <option {{ old('type') == 'pharmacy' ? 'selected' : '' }} value="agro-transformation">{{ __('Transformation Agro-alimentaire') }}</option>
                                <option {{ old('type') == 'others' ? 'selected' : '' }} value="others">{{ __("Autres") }}</option>
                            </select>
                            @error('industry') <span class="text-danger"></span> @enderror
                        </div>
                    </div>

                    <!-- Company Address -->
                    <div class="mb-3">
                        <input  type="text" wire:model="company_address" value="{{ old('company_address') }}" required autocomplete="company_address" class="form-control" placeholder="{{ __('Votre adresse') }}">
                        @error('company_address') <span class="text-danger"></span> @enderror
                    </div>

                    <div class="row">
                        <!-- Company Size -->
                        <div class="mb-3 col-6">
                            <select wire:model="size" required autocomplete="size" class="form-control">
                                <option value="">{{ __('Votre entreprise fait quelle taille ?') }}</option>
                                <option value="-5">< 5 {{ __('employés') }}</option>
                                <option value="5+">5 - 20 {{ __('employés') }}</option>
                                <option value="20+">20 - 50 {{ __('employés') }}</option>
                                <option value="50+">50 - 200 {{ __('employés') }}</option>
                                <option value="200+"> > 200 {{ __('employés') }}</option>
                            </select>
                            @error('size') <span class="text-danger"></span> @enderror
                        </div>
                        <!-- Primary Interest -->
                        <div class="mb-3 col-6">
                            <select wire:model="primary_interest" required autocomplete="primary_interest" class="form-control">
                                <option value="">{{ __('Intérêt principal') }}</option>
                                <option value="for my company">{{ __('Utiliser Koverae pour mon entreprise') }}</option>
                                <option value="for my customers">{{ __("Offrir les services Koverae à d'autres entreprises") }}</option>
                                <option value="I am a teacher">{{ __('Je suis un professeur') }}</option>
                                <option value="I am a  student">{{ __('Je suis un étudiant') }}</option>
                            </select>
                            @error('primary_interest') <span class="text-danger"></span> @enderror
                        </div>
                    </div>

                    <!-- Prospect Position -->
                    <div class="mb-3">
                        <select wire:model="currency_code" required autocomplete="currency_code" class="form-control">
                            <option value="">{{ __("Quelle devise utilisez vous ?") }}</option>
                            {{-- @foreach ($currencies as $currency)
                            <option value="{{ $currency->code }}">{{ $currency->currency_name }}</option>
                            @endforeach --}}
                        </select>
                        @error('currency_code') <span class="text-danger"></span> @enderror
                    </div>

                </div>

                <div class="form-footer">
                    <button style="margin-top: 7px; width: 45%;" wire:click="previousStep" class="btn btn-outline-secondary font-weight-bold text-uppercase" wire:loading.attr="disabled">
                        {{ __('Retour') }}
                    </button>
                    <button style="margin-top: 7px; width: 45%;background-color: #026469;" type="button" wire:click="continue" class="btn btn-primary text-end w-50 font-weight-bold text-uppercase" wire:loading.attr="disabled">
                        <span wire:loading.remove wire:target="continue">{{ __('Commencez') }}</span>
                        <span wire:loading wire:target="continue">
                            <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only"></span>
                            </div>
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

</section>
@endsection
