@extends('translation::layout')

@section('body')

    @if(count($languages))

        <div class="panel w-1/1">

            <div class="panel-header">

                {{ __('translation::translation.languages') }}

            </div>

            <div class="panel-body">

                <table>

                    <thead>
                        <tr>
                            <th>{{ __('translation::translation.language_name') }}</th>
                            <th>{{ __('translation::translation.locale') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($languages as $language => $name)
                            <tr>
                                <td>
                                    {{ $name }}
                                </td>
                                <td>
                                    <a href="{{ route('languages.translations.index', $language) }}">
                                        {{ $language }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    @endif

@endsection