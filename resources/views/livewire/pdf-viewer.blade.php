{{-- resources/views/livewire/pdf-viewer.blade.php --}}
{{-- Composant miniature qui dispatch un événement pour ouvrir l'overlay global --}}
<div>
    {{-- Prévisualisation miniature cliquable --}}
    <div
        class="pdf-preview-card"
        x-data="pdfThumbnail('{{ $pdfUrl }}', '{{ $titre }}')">
        <div
            @click="openOverlay()"
            class="pdf-thumbnail-wrapper"
            style="cursor: pointer;">

            {{-- Canvas miniature --}}
            <canvas
                x-ref="thumbnailCanvas"
                class="pdf-thumbnail"
                x-init="loadThumbnail()">
            </canvas>

            {{-- Overlay de hover --}}
            <div class="pdf-thumbnail-overlay">
                <i class="bi bi-zoom-in fs-1 text-white"></i>
                <p class="text-white mt-2 mb-0">Cliquer pour agrandir</p>
            </div>

            {{-- Badge nombre de pages --}}
            <div class="pdf-page-badge" x-show="thumbnailPages > 0" style="display: none;">
                <i class="bi bi-file-earmark-pdf"></i>
                <span x-text="thumbnailPages"></span> page<span x-show="thumbnailPages > 1">s</span>
            </div>
        </div>

        {{-- Titre et boutons --}}
        <div class="pdf-preview-footer">
            <h6 class="mb-2">{{ $titre }}</h6>
            <div class="d-grid">
                <a
                    href="{{ $pdfUrl }}"
                    download
                    class="{{ $buttonClass }} btn-sm">
                    <i class="bi bi-download me-1"></i>{{ $downloadText }}
                </a>
            </div>
        </div>

        {{-- Loader pour miniature --}}
        <div
            x-show="thumbnailLoading"
            class="pdf-thumbnail-loading"
            style="display: none;">
            <div class="spinner-border spinner-border-sm" role="status">
                <span class="visually-hidden">Chargement...</span>
            </div>
        </div>
    </div>
</div>

@once
{{-- Overlay global (une seule fois dans le document) --}}
@push('modals')
<div
    x-data="pdfViewerOverlay()"
    x-show="isOpen"
    @open-pdf-overlay.window="open($event.detail.url, $event.detail.title)"
    @keydown.escape.window="close()"
    x-cloak
    style="display: none;"
    class="pdf-overlay"
    role="dialog"
    aria-modal="true">

    <div
        class="pdf-container"
        @click.stop>

        {{-- Header avec titre et fermeture --}}
        <div class="pdf-header">
            <div class="d-flex align-items-center justify-content-between w-100">
                <h5 class="mb-0 text-white" x-text="pdfOriginalName || pdfFileName || 'Chargement...'"></h5>
                <button
                    @click="close()"
                    class="btn-close btn-close-white"
                    aria-label="Fermer">
                </button>
            </div>
        </div>

        {{-- Zone de rendu PDF avec canvas --}}
        <div class="pdf-content" x-ref="pdfContainer">
            {{-- Spinner chargement --}}
            <div
                x-show="pageRendering || !numPages"
                class="pdf-loading"
                style="display: none;">
                <div class="spinner-border text-light" role="status">
                    <span class="visually-hidden">Chargement...</span>
                </div>
                <p class="text-light mt-3">Chargement du document...</p>
            </div>

            {{-- Canvas --}}
            <div class="pdf-canvas-wrapper">
                <canvas
                    x-ref="pdfCanvas"
                    :class="{ 'd-none': pageRendering || !numPages }">
                </canvas>
            </div>
        </div>

        {{-- Footer avec contrôles --}}
        <div class="pdf-footer">
            <div class="d-flex align-items-center justify-content-between w-100 flex-wrap">

                {{-- Navigation pages --}}
                <div class="btn-group">
                    <button
                        @click="prevPage()"
                        :disabled="pageNum <= 1 || pageRendering"
                        class="btn btn-dark btn-sm"
                        title="Page précédente">
                        <i class="fa-solid fa-chevron-left"></i>
                    </button>

                    <button class="btn btn-dark btn-sm" disabled>
                        <span x-text="pageNum"></span> / <span x-text="numPages || '...'"></span>
                    </button>

                    <button
                        @click="nextPage()"
                        :disabled="pageNum >= numPages || pageRendering"
                        class="btn btn-dark btn-sm"
                        title="Page suivante">
                        <i class="fa-solid fa-chevron-right"></i>
                    </button>
                </div>

                {{-- Contrôles zoom --}}
                <div class="btn-group">
                    <button
                        @click="zoomOut()"
                        :disabled="scale <= minScale || pageRendering"
                        class="btn btn-dark btn-sm"
                        title="Zoom arrière">
                        <i class="fa-solid fa-magnifying-glass-minus"></i>
                    </button>

                    <button class="btn btn-dark btn-sm" disabled>
                        <span x-text="Math.round(scale * 100)"></span>%
                    </button>

                    <button
                        @click="zoomIn()"
                        :disabled="scale >= maxScale || pageRendering"
                        class="btn btn-dark btn-sm"
                        title="Zoom avant">
                        <i class="fa-solid fa-magnifying-glass-plus"></i>
                    </button>

                    <button
                        @click="resetZoom()"
                        :disabled="pageRendering"
                        class="btn btn-dark btn-sm"
                        title="Réinitialiser">
                        <i class="fa-solid fa-arrows-rotate"></i>
                    </button>
                </div>

                {{-- Actions supplémentaires --}}
                <div class="btn-group">
                    <a
                        :href="pdfUrl"
                        download
                        class="btn btn-dark btn-sm"
                        title="Télécharger">
                        <i class="fa-solid fa-download"></i>
                    </a>

                    <button
                        @click="printPdf()"
                        class="btn btn-dark btn-sm"
                        title="Imprimer">
                        <i class="fa-solid fa-print"></i>
                    </button>

                    <button
                        @click="toggleFullscreen()"
                        class="btn btn-dark btn-sm"
                        title="Plein écran">
                        <i class="fa-solid fa-expand"></i>
                    </button>
                </div>

            </div>
        </div>

        {{-- Message d'erreur --}}
        <div
            x-show="error"
            class="pdf-error"
            style="display: none;">
            <div class="alert alert-danger" role="alert">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <span x-text="error"></span>
            </div>
            <button
                @click="close()"
                class="btn btn-light mt-3">
                Fermer
            </button>
        </div>

    </div>
</div>
@endpush
@endonce

@push('styles')
    <style>
        /* Card de prévisualisation */
        .pdf-preview-card {
            border: 1px solid #dee2e6;
            border-radius: 8px;
            overflow: hidden;
            background: white;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
        }

        .pdf-preview-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }

        /* Wrapper de la miniature */
        .pdf-thumbnail-wrapper {
            position: relative;
            background: #f8f9fa;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        /* Canvas miniature */
        .pdf-thumbnail {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
            display: block;
        }

        /* Overlay au hover */
        .pdf-thumbnail-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .pdf-thumbnail-wrapper:hover .pdf-thumbnail-overlay {
            opacity: 1;
        }

        /* Badge nombre de pages */
        .pdf-page-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 5px;
        }

        /* Footer de la prévisualisation */
        .pdf-preview-footer {
            padding: 1rem;
        }

        .pdf-preview-footer h6 {
            font-size: 0.95rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 0.5rem;
        }

        /* Loader miniature */
        .pdf-thumbnail-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10;
        }

        /* === OVERLAY PLEIN ÉCRAN === */

        .pdf-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.95);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 0;
        }

        .pdf-container {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            background: #1a1a1a;
        }

        .pdf-header {
            background: #2c2c2c;
            padding: 1rem 1.5rem;
            border-bottom: 1px solid #444;
            flex-shrink: 0;
        }

        .pdf-content {
            flex: 1;
            overflow: auto;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: #1a1a1a;
            position: relative;
        }

        .pdf-canvas-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100%;
            min-width: 100%;
        }

        .pdf-canvas-wrapper canvas {
            max-width: 100%;
            height: auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            background: white;
        }

        .pdf-footer {
            background: #2c2c2c;
            padding: 1rem 1.5rem;
            border-top: 1px solid #444;
            flex-shrink: 0;
        }

        .pdf-footer .btn-group {
            gap: 0.5rem;
        }

        .pdf-footer .btn-group .btn {
            min-width: 40px;
            min-height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            border: 1px solid #555;
            color: #fff;
        }

        .pdf-footer .btn-group .btn:hover:not(:disabled) {
            background: #444;
            border-color: #666;
            color: #fff;
        }

        .pdf-footer .btn-group .btn i {
            font-size: 1.2rem;
            color: #fff;
        }

        .pdf-loading {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
        }

        .pdf-error {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
            max-width: 500px;
            width: 90%;
        }

        .pdf-content::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        .pdf-content::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        .pdf-content::-webkit-scrollbar-thumb {
            background: #555;
            border-radius: 6px;
        }

        .pdf-content::-webkit-scrollbar-thumb:hover {
            background: #777;
        }

        @media (max-width: 768px) {
            .pdf-thumbnail-wrapper {
                height: 250px;
            }

            .pdf-header,
            .pdf-footer {
                padding: 0.75rem 1rem;
            }

            .pdf-footer .d-flex {
                gap: 0.5rem;
            }

            .pdf-footer .btn-group {
                margin: 0.25rem 0;
            }

            .pdf-footer .btn-group .btn {
                min-width: 36px;
                min-height: 36px;
                font-size: 1rem;
            }

            .pdf-content {
                padding: 1rem;
            }
        }

        .pdf-container:fullscreen {
            background: #000;
        }
    </style>
@endpush

@push('scripts')
<script>
    // ========================================
    // COMPOSANT MINIATURE
    // ========================================
    function pdfThumbnail(url, title) {
        return {
            pdfUrl: url,
            pdfTitle: title,
            thumbnailLoading: false,
            thumbnailPages: 0,

            async loadThumbnail() {
                if (typeof pdfjsLib === 'undefined') {
                    console.error('pdfjsLib non disponible');
                    return;
                }

                const canvas = this.$refs.thumbnailCanvas;
                if (!canvas) {
                    console.error('Canvas thumbnail non disponible');
                    return;
                }

                this.thumbnailLoading = true;

                try {
                    const loadingTask = pdfjsLib.getDocument(this.pdfUrl);
                    const pdf = await loadingTask.promise;
                    this.thumbnailPages = pdf.numPages;

                    const page = await pdf.getPage(1);
                    const viewport = page.getViewport({ scale: 1 });
                    const scale = 300 / viewport.width;
                    const scaledViewport = page.getViewport({ scale: scale });

                    canvas.width = Math.round(scaledViewport.width);
                    canvas.height = Math.round(scaledViewport.height);

                    const ctx = canvas.getContext('2d');
                    await page.render({
                        canvasContext: ctx,
                        viewport: scaledViewport
                    }).promise;

                    // Nettoyer immédiatement
                    pdf.destroy();
                } catch (err) {
                    console.error('Erreur chargement miniature:', err);
                } finally {
                    this.thumbnailLoading = false;
                }
            },

            openOverlay() {
                // Dispatcher un événement global pour ouvrir l'overlay
                window.dispatchEvent(new CustomEvent('open-pdf-overlay', {
                    detail: {
                        url: this.pdfUrl,
                        title: this.pdfTitle
                    }
                }));
            }
        }
    }

    // ========================================
    // OVERLAY GLOBAL (basé sur exempleoverlay.blade.php)
    // ========================================
    function pdfViewerOverlay() {
        console.log('PDF Viewer Overlay initialized');
        return {
            // état
            isOpen: false,
            pdfUrl: null,
            pdfFileName: null,
            pdfOriginalName: null,
            _loadingTask: null,
            _pdfDoc: null,
            _renderTask: null,
            numPages: 0,
            pageNum: 1,
            pageRendering: false,
            scale: 1.25,
            minScale: 0.5,
            maxScale: 3.0,
            error: null,

            // API
            open(url, originalName = null) {
                console.log('PDF overlay open() called with:', url, originalName);
                if (!url) {
                    console.error('No URL provided to open()');
                    return;
                }
                this.pdfUrl = url;
                this.pdfFileName = this._extractName(url);
                this.pdfOriginalName = originalName || this.pdfFileName;
                this.isOpen = true;
                document.body.style.overflow = 'hidden';
                console.log('Overlay state set to open, isOpen:', this.isOpen);

                // Charge après rendu du DOM (ne dépend plus de transitionend)
                const start = () => this.loadAndRender();
                if (window.Alpine?.nextTick) {
                    Alpine.nextTick(() => requestAnimationFrame(start));
                } else {
                    requestAnimationFrame(start);
                }

                // Re-render si la taille du conteneur change
                this._watchResize();
            },

            close() {
                this.isOpen = false;
                document.body.style.overflow = '';
                setTimeout(() => this.cleanup(), 300);
            },

            cleanup() {
                try {
                    if (this._renderTask) Alpine.raw(this._renderTask)?.cancel?.();
                } catch(e) {}
                try {
                    if (this._loadingTask) Alpine.raw(this._loadingTask)?.destroy?.();
                } catch(e) {}
                try {
                    if (this._pdfDoc) Alpine.raw(this._pdfDoc)?.destroy?.();
                } catch(e) {}
                this._renderTask = null;
                this._loadingTask = null;
                this._pdfDoc = null;
                this.pdfUrl = null;
                this.pdfFileName = null;
                this.pdfOriginalName = null;
                this.numPages = 0;
                this.pageNum = 1;
                this.pageRendering = false;
                this.scale = 1.25;
                this.error = null;
                this._unwatchResize?.();
            },

            // coeur
            loadAndRender() {
                if (!this.pdfUrl || this._pdfDoc) return;

                console.log('Loading PDF:', this.pdfUrl);
                console.log('pdfjsLib available:', typeof pdfjsLib !== 'undefined');

                if (typeof pdfjsLib === 'undefined') {
                    console.error('pdfjsLib is not available!');
                    this.error = 'PDF.js non chargé correctement';
                    return;
                }

                this.pageRendering = true;

                const task = pdfjsLib.getDocument(this.pdfUrl);
                this._loadingTask = task;

                task.promise.then(pdf => {
                    this._pdfDoc = pdf;
                    this.numPages = pdf.numPages;
                    this.pageNum = 1;
                    this.renderPage(this.pageNum);
                }).catch(err => {
                    console.error('[PDF] load error', err);
                    this.pageRendering = false;
                    this.error = 'Impossible de charger le document PDF.';
                });
            },

            renderPage(num, retry = 0) {
                if (!this._pdfDoc) return;

                // Récupération sûre des refs Alpine
                const refs = this.$refs || {};
                const container = refs.pdfContainer;
                const canvas = refs.pdfCanvas;

                // Si les refs ne sont pas encore dispo, on réessaie
                if (!container || !canvas) {
                    if (retry < 20) {
                        return setTimeout(() => this.renderPage(num, retry + 1), 100);
                    }
                    this.pageRendering = false;
                    return;
                }

                // Annule un rendu en cours le cas échéant
                try { this._renderTask?.cancel?.(); } catch (e) {}
                this._renderTask = null;

                this.pageRendering = true;

                // CRUCIAL: Utiliser Alpine.raw() pour enlever le proxy Alpine
                const rawPdf = Alpine.raw(this._pdfDoc);

                rawPdf.getPage(num).then(page => {
                    const viewport = page.getViewport({ scale: this.scale });
                    console.log('Rendering with scale:', this.scale, 'viewport:', viewport.width, 'x', viewport.height);

                    canvas.width = Math.round(viewport.width);
                    canvas.height = Math.round(viewport.height);

                    const ctx = canvas.getContext('2d');
                    this._renderTask = page.render({ canvasContext: ctx, viewport });
                    return this._renderTask.promise;
                }).then(() => {
                    this.pageRendering = false;
                    this._renderTask = null;
                }).catch(err => {
                    if (err?.name !== 'RenderingCancelledException') {
                        console.error('[PDF] render error', err);
                    }
                    this.pageRendering = false;
                    this._renderTask = null;
                });
            },

            prevPage() {
                if (this.pageNum <= 1 || this.pageRendering) return;
                this.pageNum--;
                this.renderPage(this.pageNum);
                // Scroll to top après changement de page
                const container = this.$refs.pdfContainer;
                if (container) container.scrollTop = 0;
            },

            nextPage() {
                if (this.pageNum >= this.numPages || this.pageRendering) return;
                this.pageNum++;
                this.renderPage(this.pageNum);
                // Scroll to top après changement de page
                const container = this.$refs.pdfContainer;
                if (container) container.scrollTop = 0;
            },

            zoomIn() {
                if (this.scale >= this.maxScale) return;
                this.scale += 0.25;
                console.log('Zoom in to:', this.scale);
                this.renderPage(this.pageNum);
            },

            zoomOut() {
                if (this.scale <= this.minScale) return;
                this.scale -= 0.25;
                console.log('Zoom out to:', this.scale);
                this.renderPage(this.pageNum);
            },

            resetZoom() {
                this.scale = 1.25;
                console.log('Reset zoom to:', this.scale);
                this.renderPage(this.pageNum);
            },

            printPdf() {
                window.open(this.pdfUrl, '_blank');
            },

            toggleFullscreen() {
                const container = this.$el.querySelector('.pdf-container');
                if (!container) return;

                if (!document.fullscreenElement) {
                    container.requestFullscreen().catch(err => {
                        console.error('Erreur fullscreen:', err);
                    });
                } else {
                    document.exitFullscreen();
                }
            },

            // utils
            _extractName(url) {
                try { return decodeURIComponent(url.split('?')[0].split('/').pop() || 'Document.pdf'); }
                catch(e){ return 'Document.pdf'; }
            },

            _watchResize() {
                const el = this.$refs.pdfContainer;
                if (!el || this._resizeObs) return;
                const rerender = () => {
                    // Vérifier avec Alpine.raw() pour éviter le proxy
                    const rawPdf = this._pdfDoc ? Alpine.raw(this._pdfDoc) : null;
                    if (rawPdf && !this.pageRendering) {
                        this.renderPage(this.pageNum);
                    }
                };
                if ('ResizeObserver' in window) {
                    this._resizeObs = new ResizeObserver(() => rerender());
                    this._resizeObs.observe(el);
                    this._unwatchResize = () => {
                        if (this._resizeObs) {
                            this._resizeObs.disconnect();
                            this._resizeObs = null;
                        }
                    };
                } else {
                    const onResize = () => rerender();
                    window.addEventListener('resize', onResize);
                    this._unwatchResize = () => window.removeEventListener('resize', onResize);
                }
            },
            _resizeObs: null,
            _unwatchResize: null,
        }
    }
</script>
@endpush
