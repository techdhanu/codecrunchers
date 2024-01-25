# analyzer/views.py
from django.shortcuts import render
from django.http import JsonResponse
from django.views.decorators.csrf import csrf_exempt
from .data.py import profile_user  # Replace with your script name

@csrf_exempt
def analyze_instagram(request):
    if request.method == 'POST':
        username = request.POST.get('username', '')
        risk_level = profile_user(username)
        return JsonResponse({'risk_level': risk_level})
    return JsonResponse({'error': 'Invalid request method'})
