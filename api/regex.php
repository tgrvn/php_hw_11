<?php

const PHONE_REGEX = "/^\+38\s0\d{2}\s\d{3}\s\d{2}\s\d{2}$/";
const TEXT_REGEX = "/^[а-яА-Яa-zA-Z0-9\s?!,:;.'Ёё]{0,500}$/ui";
const CENSURED_REGEX = "/путин|рф|росс|федерац/iu";
const TICKET_REGEX = "/^\d{6}$/";
