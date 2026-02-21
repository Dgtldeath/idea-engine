<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C3 Marketing OS — Engineering Portfolio | Adam Gumm</title>
    <meta name="description" content="A complete marketing operating system engineered from scratch — Laravel, AI agents, multi-tenant architecture, and context-aware automation.">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'slate-navy': '#1E293B',
                        'accent-blue': '#3B82F6',
                        'bg-light': '#F8FAFC',
                    }
                }
            }
        }
    </script>
    
    <style>
        html {
            scroll-behavior: smooth;
        }
        
        code {
            background: #f1f5f9;
            padding: 0.125rem 0.375rem;
            border-radius: 0.25rem;
            font-size: 0.875em;
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
        }
        
        pre {
            background: #1e293b;
            color: #e2e8f0;
            padding: 1.5rem;
            border-radius: 0.75rem;
            overflow-x: auto;
            font-size: 0.875rem;
            line-height: 1.6;
        }
        
        pre code {
            background: transparent;
            padding: 0;
            color: inherit;
        }
    </style>
</head>
<body class="bg-[#F8FAFC] text-slate-900">
    
    <!-- Navigation -->
    <nav class="bg-white/90 backdrop-blur-sm shadow-sm fixed w-full top-0 z-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <div class="w-10 h-10 bg-slate-900 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <span class="ml-3 text-lg font-semibold text-slate-900">C3 Marketing OS</span>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6 text-sm">
                    <a href="#architecture" class="text-slate-700 hover:text-slate-900 font-medium transition">Architecture</a>
                    <a href="#engineering" class="text-slate-700 hover:text-slate-900 font-medium transition">Engineering</a>
                    <a href="#impact" class="text-slate-700 hover:text-slate-900 font-medium transition">Impact</a>
                </div>
                <div class="md:hidden">
                    <button class="text-slate-700" id="mobile-menu-button">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile menu -->
        <div class="hidden md:hidden bg-white border-t" id="mobile-menu">
            <div class="px-4 pt-2 pb-3 space-y-1">
                <a href="#architecture" class="block px-3 py-2 text-slate-700 hover:bg-slate-50 rounded-lg">Architecture</a>
                <a href="#engineering" class="block px-3 py-2 text-slate-700 hover:bg-slate-50 rounded-lg">Engineering</a>
                <a href="#impact" class="block px-3 py-2 text-slate-700 hover:bg-slate-50 rounded-lg">Impact</a>
            </div>
        </div>
    </nav>

    <!-- SECTION 1: HERO — PERSONAL + TECHNICAL -->
    <section class="pt-24 pb-16 md:pt-32 md:pb-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-slate-900 mb-6 leading-tight">
                        C3 Marketing OS —<br>
                        <span class="text-[#3B82F6]">A Complete Marketing Operating System I Engineered From Scratch.</span>
                    </h1>
                    <p class="text-xl text-slate-700 mb-6 leading-relaxed">
                        A unified brain for brands, content, and clients — built with Laravel, AI agents, multi-tenant architecture, and context-aware automation.
                    </p>
                    <div class="space-y-4 text-slate-700 leading-relaxed">
                        <p>
                            I build dozens of apps, brands, and marketing systems. I needed one core OS to support all of it.
                        </p>
                        <p>
                            Nothing existed that could handle multi-client memory + voice + creative generation + publishing + analytics. So I built it.
                        </p>
                    </div>
                </div>
                <div class="hidden md:block">
                    <!-- Simple architecture diagram placeholder -->
                    <div class="bg-white rounded-xl p-8 shadow-lg border border-slate-200">
                        <div class="space-y-4">
                            <!-- Central brain -->
                            <div class="flex justify-center">
                                <div class="w-24 h-24 bg-gradient-to-br from-[#3B82F6] to-blue-400 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                    </svg>
                                </div>
                            </div>
                            <!-- Connected nodes -->
                            <div class="grid grid-cols-3 gap-3">
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">Brands</div>
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">Content</div>
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">Clients</div>
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">Memory</div>
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">AI</div>
                                <div class="bg-slate-100 rounded-lg p-3 text-center text-xs text-slate-600">Publish</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: WHY I BUILT THIS (ENGINEERING STORY) -->
    <section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8">
                Why I Built This
            </h2>
            <div class="space-y-6 text-lg text-slate-700 leading-relaxed">
                <p>
                    I needed a system that worked across 25+ brands and projects. Every brand had a different voice, audience, and workflow. Traditional tools fragment the workflow — Google Docs for notes, Notion for planning, Trello for tasks, ChatGPT for ideas, Canva for design, 100 browser tabs for research.
                </p>
                <p>
                    I wanted a "central intelligence" system. One place where brand memory lived, where context was retained, where ideas could be generated on-demand, and where publishing could be automated. I wanted a predictable, repeatable, scalable system I could rely on.
                </p>
                <p>
                    From a developer's perspective, I needed something that could handle multi-tenancy from day one. Something that could scale to 100+ clients without confusion. Something that could orchestrate AI agents intelligently, not just fire off random prompts. Something that could remember context across conversations, not just respond to one-off queries.
                </p>
                <p class="font-semibold text-slate-900">
                    This is systems thinking applied to marketing. It's a CRM crossed with an AI brain, built for people who manage multiple brands and need consistency at scale.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION 3: THE CORE PROBLEM C3 SOLVES -->
    <section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#F8FAFC]">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8">
                The Core Problem C3 Solves
            </h2>
            <div class="space-y-6">
                <div class="bg-white rounded-xl p-6 border-l-4 border-slate-400">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Ideas Get Lost Across Dozens of Apps</h3>
                    <p class="text-slate-700">
                        Your best ideas live in notebooks, voice memos, Slack threads, Google Docs, and random notes apps. Nothing connects. Nothing is searchable in context. You lose momentum because you can't find what you need.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 border-l-4 border-slate-400">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">No Tool Remembers Brand Voice Across Many Clients</h3>
                    <p class="text-slate-700">
                        Every client has a different voice, tone, and style. Traditional tools don't retain this context. You're constantly re-explaining brand guidelines, re-teaching voice, and starting from scratch with every new piece of content.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 border-l-4 border-slate-400">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">AI Tools Don't Retain Context or Structure</h3>
                    <p class="text-slate-700">
                        ChatGPT and similar tools are powerful, but they're stateless. Every conversation starts from zero. There's no memory, no structure, no way to build on previous conversations. You're repeating yourself constantly.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 border-l-4 border-slate-400">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Agencies Waste Time Repeating Onboarding Steps</h3>
                    <p class="text-slate-700">
                        Every new client means re-entering brand guidelines, re-creating personas, re-establishing workflows. There's no reusable template, no way to scale onboarding, no system that remembers what you've already taught it.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-6 border-l-4 border-slate-400">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">There's No Unified "Marketing Brain"</h3>
                    <p class="text-slate-700">
                        Marketing tools are fragmented. Content calendars, social schedulers, analytics dashboards, AI generators — they're all separate. There's no central intelligence that connects everything, learns from performance, and improves over time.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: SYSTEM ARCHITECTURE OVERVIEW -->
    <section id="architecture" class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 text-center">
                System Architecture Overview
            </h2>
            <p class="text-xl text-slate-700 mb-12 text-center max-w-3xl mx-auto">
                Multi-tenant structure with isolated client workspaces, brand memory, and AI orchestration.
            </p>

            <!-- Architecture Flow Diagram -->
            <div class="bg-slate-50 rounded-xl p-8 mb-12 border border-slate-200">
                <div class="flex flex-wrap justify-center items-center gap-4 text-sm">
                    <div class="bg-white rounded-lg px-4 py-2 border border-slate-300 font-semibold">Account</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-white rounded-lg px-4 py-2 border border-slate-300 font-semibold">Team</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-white rounded-lg px-4 py-2 border border-slate-300 font-semibold">Users</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-white rounded-lg px-4 py-2 border border-slate-300 font-semibold">Clients</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-blue-100 rounded-lg px-4 py-2 border border-blue-300 font-semibold text-blue-900">Brand Memory</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-purple-100 rounded-lg px-4 py-2 border border-purple-300 font-semibold text-purple-900">Personas</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-green-100 rounded-lg px-4 py-2 border border-green-300 font-semibold text-green-900">Conversations</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-orange-100 rounded-lg px-4 py-2 border border-orange-300 font-semibold text-orange-900">Automations</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-yellow-100 rounded-lg px-4 py-2 border border-yellow-300 font-semibold text-yellow-900">Publishing</div>
                    <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                    <div class="bg-indigo-100 rounded-lg px-4 py-2 border border-indigo-300 font-semibold text-indigo-900">Analytics</div>
                </div>
            </div>

            <!-- Architecture Components -->
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Multi-Tenant Structure</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Accounts contain teams, teams contain users, users access clients. Each client has isolated workspace, memory, and data. Built with Laravel's service container and dependency injection for clean separation.
                    </p>
                    <pre class="text-xs"><code>Account → Team → User → Client
Each client: isolated workspace</code></pre>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Brand Memory Engine</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Vectorized context storage + serialized memory. Stores brand voice, keywords, values, style guides. Uses embeddings for semantic search and context retrieval. Memory persists across conversations.
                    </p>
                    <pre class="text-xs"><code>Memory → Vector DB → Context Retrieval
Persistent across sessions</code></pre>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Persona Generator</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Generates and refreshes audience personas automatically. Learns from content performance, adapts to brand voice, creates detailed audience profiles. Can generate multiple personas per brand.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Conversation Manager</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Manages AI conversations with context retention. Each conversation thread maintains history, brand context, and user preferences. Supports threaded conversations, branching, and context switching.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">GPT Orchestration</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Intelligent prompt engineering with retry logic, context injection, and response validation. Handles rate limits, token management, and cost optimization. Service classes abstract API complexity.
                    </p>
                    <pre class="text-xs"><code>Service Layer → GPT API
Retry + Context + Validation</code></pre>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Social Publishing Pipeline</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Drafts → approvals → scheduled → posted. Integrates with Instagram, TikTok, Twitter, LinkedIn APIs. Handles media uploads, caption formatting, hashtag optimization. Queue-based processing.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Analytics Ingestion</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Pulls metrics from social platforms, processes performance data, generates insights. Tracks engagement, reach, conversions. Uses insights to improve content generation and persona accuracy.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Automations Engine</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Event-driven workflows. Weekly content plans, persona refresh, brand updates, scheduled publishing. Laravel queues + jobs for async processing. Configurable triggers and conditions.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Billing (Stripe/PayPal Ready)</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Subscription management, usage tracking, payment processing. Ready for Stripe and PayPal integration. Handles plan upgrades, downgrades, cancellations. Usage-based billing support.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">Permissions + Roles</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Admin, contributor, viewer roles. Granular permissions per client, per feature. Team-level and client-level access control. Built on Laravel's authorization system.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border border-slate-200">
                    <h3 class="text-lg font-bold text-slate-900 mb-3">File Structure</h3>
                    <p class="text-slate-700 text-sm leading-relaxed mb-3">
                        Laravel modules + Service classes. Organized by domain (Brands, Conversations, Publishing, Analytics). Service layer for business logic, repositories for data access. Clean separation of concerns.
                    </p>
                    <pre class="text-xs"><code>app/
  Services/
  Repositories/
  Modules/
    Brands/
    Conversations/
    Publishing/</code></pre>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: FEATURE SET (ENGINEERING MODULES) -->
    <section id="engineering" class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#F8FAFC]">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 text-center">
                Feature Set — Explained as Engineering Modules
            </h2>
            <p class="text-xl text-slate-700 mb-12 text-center max-w-3xl mx-auto">
                Each module solves a specific problem in the marketing workflow. Here's how they work.
            </p>

            <div class="space-y-6">
                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Brand Profile Manager</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Stores tonal memory, keywords, values, style guides, and brand rules. This is the foundation of context retention. Every client gets a brand profile that persists across all conversations and content generation. The system references this profile when generating ideas, ensuring consistency. Built as a Laravel model with JSON columns for flexible schema.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Persona Engine</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Generates and refreshes audience personas automatically. Uses GPT to analyze brand voice, content performance, and audience data. Creates detailed personas with demographics, psychographics, pain points, and content preferences. Can generate multiple personas per brand. Personas are stored and updated based on performance data. This module ensures content generation targets the right audience.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Memory Engine</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Stores conversation context per client. Each conversation thread maintains history, brand context, and user preferences. Uses vector embeddings for semantic search, allowing the system to retrieve relevant context from past conversations. Memory persists across sessions, so the system "remembers" what you've discussed. This is what makes C3 different from stateless AI tools — it builds knowledge over time.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Marketing Coordinator Agent</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Intelligent assistant, guide, and creator. This is the primary AI agent that orchestrates workflows. It understands context, references brand memory, generates ideas, and coordinates with other modules. Built with GPT-4, with custom prompt engineering for consistency. The agent acts as a thinking partner, not just a content generator. It suggests strategies, plans content calendars, and helps with decision-making.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Social Publishing Pipeline</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Drafts → approvals → scheduled → posted. Handles the entire content lifecycle. Integrates with Instagram, TikTok, Twitter, LinkedIn APIs. Manages media uploads, caption formatting, hashtag optimization. Uses Laravel queues for async processing. Supports approval workflows for teams. Tracks publishing status and handles errors gracefully. This module turns ideas into published content automatically.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Analytics + Insights Module</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Metrics ingestion + insights generation. Pulls data from social platforms, processes performance, generates actionable insights. Tracks engagement, reach, conversions, and content performance. Uses this data to improve content generation, refine personas, and optimize strategies. The system learns from what works and suggests improvements. This closes the feedback loop between creation and performance.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Automations Engine</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Weekly content plans, persona refresh, brand updates, scheduled publishing. Event-driven workflows that trigger based on schedules, conditions, or user actions. Built on Laravel queues and jobs. Supports complex workflows with branching logic. Handles retries, failures, and notifications. This module removes repetitive tasks and keeps the system running smoothly. You set the rules, the system executes.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Team & Role Layer</h3>
                    <p class="text-slate-700 leading-relaxed">
                        Admin, contributor, viewer roles with granular permissions. Team-level and client-level access control. Built on Laravel's authorization system with policies and gates. Supports team collaboration while maintaining client isolation. This module ensures the right people have the right access, and client data stays secure.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 border border-slate-200 shadow-sm">
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Multi-Client Switching</h3>
                    <p class="text-slate-700 leading-relaxed">
                        C3 behaves like a CRM crossed with an AI brain. Switch between clients instantly, with full context retention. Each client workspace is isolated but accessible. The system remembers which client you're working with and applies the correct brand memory, personas, and settings. This is what makes C3 scalable — you can manage 100+ clients without confusion.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: ENGINEERING DECISIONS -->
    <section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8">
                Engineering Decisions — Why I Built It This Way
            </h2>
            <div class="space-y-6 text-lg text-slate-700 leading-relaxed">
                <p>
                    <strong class="text-slate-900">Predictability over randomness.</strong> Every AI response should be consistent with brand voice. I built retry logic, validation, and prompt engineering to ensure the system generates content that sounds like the brand, not like a random AI.
                </p>
                <p>
                    <strong class="text-slate-900">Memory over one-off prompts.</strong> Traditional AI tools are stateless. C3 remembers context, brand voice, and preferences. This is the core differentiator — the system builds knowledge over time, not just responds to queries.
                </p>
                <p>
                    <strong class="text-slate-900">Multi-tenancy from the beginning.</strong> I didn't add multi-tenancy later — it's built into the architecture from day one. Accounts, teams, users, clients are all isolated. This means the system scales to 100+ clients without architectural changes.
                </p>
                <p>
                    <strong class="text-slate-900">Laravel for stability and speed.</strong> Laravel provides the foundation — routing, authentication, authorization, queues, jobs, service container. I built on proven infrastructure instead of reinventing the wheel. This means faster development and more reliable code.
                </p>
                <p>
                    <strong class="text-slate-900">Service classes for orchestration.</strong> Business logic lives in service classes, not controllers. This keeps code organized, testable, and reusable. Services orchestrate AI calls, manage workflows, and coordinate between modules.
                </p>
                <p>
                    <strong class="text-slate-900">AI agent hierarchy.</strong> The Marketing Coordinator is the primary agent, but it can delegate to specialized agents (content generator, persona builder, analytics analyzer). This creates a hierarchy of intelligence, not just one monolithic AI.
                </p>
                <p>
                    <strong class="text-slate-900">Sharp focus on UX simplicity.</strong> Sidebar navigation, workspace views, modal system. The UI is clean and focused. Users shouldn't fight the interface — they should focus on creating. I designed for speed and clarity, not feature bloat.
                </p>
                <p>
                    <strong class="text-slate-900">Scalable to 100+ clients without confusion.</strong> The architecture supports unlimited clients, each with isolated workspaces. The system doesn't slow down or become confusing as you add clients. This is enterprise-scale architecture, built for solo operators and small teams.
                </p>
            </div>
        </div>
    </section>

    <!-- SECTION 7: WHO THIS SYSTEM IS BUILT FOR -->
    <section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#F8FAFC]">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 text-center">
                Who This System Is Built For
            </h2>
            <p class="text-xl text-slate-700 mb-12 text-center max-w-3xl mx-auto">
                Professional audiences who need a unified marketing operating system.
            </p>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-[#3B82F6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Agencies Managing Multiple Brands</h3>
                    <p class="text-slate-700 text-sm">Need to maintain brand consistency across many clients without manual overhead.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Solo Freelancers</h3>
                    <p class="text-slate-700 text-sm">Juggling many clients and need a system that remembers each brand's voice.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">App Builders</h3>
                    <p class="text-slate-700 text-sm">With lots of sub-projects, each needing consistent marketing and content.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Content Creators</h3>
                    <p class="text-slate-700 text-sm">Who want to scale output without losing brand voice or consistency.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Founders</h3>
                    <p class="text-slate-700 text-sm">Who want smarter marketing systems, not more fragmented tools.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Developers</h3>
                    <p class="text-slate-700 text-sm">Learning AI agent orchestration and multi-tenant architecture patterns.</p>
                </div>

                <div class="bg-white rounded-xl p-6 border border-slate-200">
                    <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-slate-900 mb-2">Teams</h3>
                    <p class="text-slate-700 text-sm">Wanting unified creative workflows with shared brand memory and context.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 8: IMPACT -->
    <section id="impact" class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-white">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-8">
                Impact — What This System Changes
            </h2>
            <div class="space-y-6">
                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Centralizes Creative Intelligence</h3>
                    <p class="text-slate-700">
                        All brand knowledge, voice, personas, and context live in one place. No more scattered notes, lost ideas, or forgotten guidelines. The system becomes your marketing brain.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Removes Chaos from Content Creation</h3>
                    <p class="text-slate-700">
                        Ideas get generated automatically. Content gets organized automatically. Workflows get executed automatically. You focus on strategy and creativity, not busywork.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Enables Consistent Posting Across Many Brands</h3>
                    <p class="text-slate-700">
                        Maintain brand voice across 10, 50, or 100+ clients without manual overhead. Each brand stays consistent because the system remembers the rules.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Reduces Client Switching Load</h3>
                    <p class="text-slate-700">
                        Context is stored. Switch between clients instantly without losing context or re-explaining brand voice. The system remembers what you've taught it.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Saves Hours Per Week</h3>
                    <p class="text-slate-700">
                        Automated content generation, organized workflows, and context retention eliminate repetitive tasks. What used to take hours now takes minutes.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Allows Small Teams to Operate Like Large Agencies</h3>
                    <p class="text-slate-700">
                        The system scales your brain. One person can manage 10+ clients with consistent quality because the system handles memory, generation, and organization.
                    </p>
                </div>

                <div class="bg-slate-50 rounded-xl p-6 border-l-4 border-[#3B82F6]">
                    <h3 class="text-lg font-semibold text-slate-900 mb-2">Automates Repetitive Strategy + Planning Tasks</h3>
                    <p class="text-slate-700">
                        Weekly content plans, persona refresh, brand updates — all automated. The system handles routine tasks so you can focus on high-level strategy and creative work.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 9: LIGHT CLOSER (RESUME STYLE) -->
    <section class="py-20 md:py-28 px-4 sm:px-6 lg:px-8 bg-[#F8FAFC]">
        <div class="max-w-4xl mx-auto text-center">
            <p class="text-xl md:text-2xl text-slate-700 leading-relaxed mb-8">
                C3 Marketing OS is the backbone behind everything I build — a unified intelligence layer that supports apps, brands, and client work.
            </p>
            <p class="text-lg text-slate-600">
                It represents my approach to engineering: build once, scale everywhere.
            </p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center mb-2">
                        <div class="w-8 h-8 bg-[#3B82F6] rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                        <span class="ml-3 text-lg font-semibold text-white">C3 Marketing OS</span>
                    </div>
                    <p class="text-slate-400 text-sm">
                        Engineered by Adam Gumm
                    </p>
                </div>
                <div class="flex items-center space-x-6 text-sm">
                    <a href="#" class="hover:text-white transition">GitHub</a>
                    <a href="#" class="hover:text-white transition">Documentation</a>
                    <a href="/projects/" class="hover:text-white transition">Back to Portfolio</a>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 mt-8 text-center text-slate-400 text-sm">
                <p>&copy; <?php echo date('Y'); ?> Adam Gumm. Built with intention.</p>
            </div>
        </div>
    </footer>

    <!-- Mobile menu script -->
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
