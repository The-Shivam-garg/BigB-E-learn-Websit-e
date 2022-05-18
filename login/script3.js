const { createClient } = supabase
const supabaseUrl = `https://lwjxpntafqybhoveorha.supabase.co`
const supabaseAnonKey = `eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJzdXBhYmFzZSIsInJlZiI6Imx3anhwbnRhZnF5YmhvdmVvcmhhIiwicm9sZSI6ImFub24iLCJpYXQiOjE2NDUxOTYxNjgsImV4cCI6MTk2MDc3MjE2OH0.GmWvqQxqV7M4sMoyfnVMJrXImJ-XBVyBzTgCn6vlEVM`

const _supabase = createClient(supabaseUrl, supabaseAnonKey)

//console.log(_supabase);