{{-- resources/views/diaries/display.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="bg-image">
    <img src="https://media1.giphy.com/media/twQYPSiVdcq3s2KFyo/200w.gif?cid=6c09b952eoruw4mzbm6d2skcmlagyxcvq1jlj11hpai8gynj&ep=v1_gifs_search&rid=200w.gif&ct=g" class="image">
</div>

<div class="container">
    <h1>My Diaries</h1>

    @if($diaryEntries->isEmpty())
        <p>No diary entries found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Diary</th>
                </tr>
            </thead>
            <tbody>
                @foreach($diaryEntries as $entry)
                    <tr>
                        <td>{{ $entry->Date }}</td>
                        <td>{{ $entry->Diary }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

<div class="footer">
    <a href="{{ route('home') }}">
        <button type="button" class="back">BACK</button><br>
    </a><br>
</div>
@endsection
