@extends('ApproveForm.app')
Copy code
<!-- Calendar Grid -->
<div class="calendar-grid">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sun</th>
                <th class="text-center">Mon</th>
                <th class="text-center">Tue</th>
                <th class="text-center">Wed</th>
                <th class="text-center">Thu</th>
                <th class="text-center">Fri</th>
                <th class="text-center">Sat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @for ($i = 0; $i < 7; $i++)
                    <td class="text-center">
                        <a href="{{ url('/events/show/' . date('Y-m-d', strtotime('2023-09-10 +' . $i . ' days'))) }}">
                            {{ date('d', strtotime('2023-09-10 +' . $i . ' days')) }}
                        </a>
                        <!-- Display events for this day here if any -->
                    </td>
                @endfor
            </tr>
        </tbody>
    </table>
</div>