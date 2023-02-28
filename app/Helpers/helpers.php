<?php

function formatDate($date)
{
    $date = date_create($date);
    $date = date_format($date, 'd M, Y');
    return $date;
}


// borrowers date return function
function returnDate($date)
{
    $date = date_create($date);
    $date = date_add($date, date_interval_create_from_date_string("10 days"));
    $date = date_format($date, 'd M, Y');
    return $date;
}

function returnDateTime($date)
{
    $date = date_create($date);
    $date = date_format($date, 'H:ia, d M');
    return $date;
}

function currentUser(): object
{
    return auth()->user();
}

function greeting(): string
{
    $string = "good morning";
    if ((intval(date('H')) >= 12) && (intval(date('H')) < 16)) {
        $string = 'good afternoon';
    } elseif (intval(date('H')) >= 16 && intval(date('H')) < 23) {
        $string = 'good evening';
    }
    return $string;
}

function toDashboard()
{
    return redirect(auth()->user()->roles[0]->name . '/home');
}

function moneyFormat($money)
{
    // dollar = '&#36' or '$dollar,
    // pound = '&#163' or &pound
    $money = intval($money);
    $salary =  number_format("$money", 2);
    return $salary;
}

function performance($initial, $final)
{
    $change = $initial - $final;
    $percent = round(($change / $initial) * 100);
    return  $percent . '%';
}