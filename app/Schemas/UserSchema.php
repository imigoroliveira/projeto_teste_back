<?php

namespace App\Schemas;

/**
 * @OA\Schema(
 *     schema="User",
 *     title="User",
 *     required={"name", "email", "password"},
 *     @OA\Property(
 *         property="name",
 *         type="string",
 *         example="John Doe"
 *     ),
 *     @OA\Property(
 *         property="email",
 *         type="string",
 *         format="email",
 *         example="john.doe@example.com"
 *     ),
 *     @OA\Property(
 *         property="password",
 *         type="string",
 *         format="password",
 *         example="secret"
 *     )
 * )
 */
class UserSchema
{
}
