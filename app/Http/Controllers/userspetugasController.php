<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class userspetugasController extends Controller
{
    // Menampilkan daftar pengguna
    public function userspetugas()
    {
        $users = User::all(); // Ambil semua data pengguna
        return view('navbarpetugas.userspetugas', compact('users'));
    }



    // Menyimpan pengguna baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'roll' => 'required|in:admin,petugas', // Validasi roll
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roll' => $request->roll, // Menyimpan roll
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }


    // Mengupdate data pengguna di database
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'roll' => 'required|in:admin,petugas', // Validasi roll
        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
        $user->roll = $request->roll; // Mengupdate roll
        $user->save();

        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }

    // Menghapus pengguna dari database
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
