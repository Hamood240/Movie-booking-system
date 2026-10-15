@echo off
setlocal enabledelayedexpansion

:: Change directory to the folder where this batch file is located
cd /d "%~dp0"

echo ========================================================
echo         Pushing Movie Booking System to GitHub
echo ========================================================
echo.

:: 1. Check if Git is installed
where git >nul 2>nul
if %errorlevel% neq 0 (
    echo [ERROR] Git is not installed or not in your system PATH.
    echo Please install Git from https://git-scm.com/
    echo.
    pause
    exit /b
)

:: 2. Check if git repository is already initialized
if not exist ".git" (
    echo [1/5] Initializing Git repository...
    git init
) else (
    echo [1/5] Git repository already initialized.
)

:: 3. Set branch to main
echo [2/5] Setting branch to main...
git branch -M main

:: 4. Configure remote URL
echo [3/5] Configuring GitHub remote repository...
git remote get-url origin >nul 2>nul
if %errorlevel% neq 0 (
    git remote add origin https://github.com/Hamood240/Movie-booking-system.git
) else (
    git remote set-url origin https://github.com/Hamood240/Movie-booking-system.git
)

:: 5. Stage all changes
echo [4/5] Staging files...
git add .

:: 6. Commit changes
set "COMMIT_MSG=Update: %date% %time%"
echo Committing with message: "%COMMIT_MSG%"
git commit -m "%COMMIT_MSG%" >nul 2>nul
if %errorlevel% equ 0 (
    echo [OK] Changes committed.
) else (
    echo [INFO] No new changes to commit, proceeding to push...
)

:: 7. Push to GitHub
echo.
echo [5/5] Pushing code to GitHub (main branch)...
git push -u origin main

if %errorlevel% neq 0 (
    echo.
    echo [NOTICE] Normal push failed. Attempting to push with --force in case remote has initial commits...
    git push -u origin main --force
)

echo.
if %errorlevel% equ 0 (
    echo ========================================================
    echo         SUCCESS! Project pushed to GitHub!
    echo   https://github.com/Hamood240/Movie-booking-system
    echo ========================================================
) else (
    echo ========================================================
    echo   [ERROR] Push failed. 
    echo   Please check your internet connection or GitHub login.
    echo ========================================================
)

echo.
pause
