// JQUERY's

    
// VANILLA's

// disparo para getAPI para receber os dados dos cursos
document.addEventListener('DOMContentLoaded', function() {
    const boxes = document.querySelectorAll('.box-item');
    boxes.forEach(box => {
        const mneumonico = box.getAttribute('data-mneumonico');
        if (mneumonico) {
            fetch(`http://127.0.0.1/novo-pos/wp-content/themes/twentyseventeen/getAPI.php?mneumonico=${mneumonico}`)
            .then(response => response.json())
            .then(data => {
                if (data.investimentos) {
                    const menorValor = Math.min(...data.investimentos.map(i => i.valor));
                    const valorIntegral = (menorValor / 40) * 100;
                    box.querySelector('.apiGets').innerHTML = `
                        <p class="apenasPresencial partir">A partir de:</p>
                        <span class="apenasPresencial dezoitoxSDesconto">18x de R$</span> 
                        <span class="valorSDesconto apenasPresencial">${valorIntegral.toFixed(2).replace('.', ',')}</span>
                        <div class="pula"></div>
                        <span class="dozexCDesconto apenasEAD">12x de R$</span> 
                        <span class="dozexCDesconto apenasPresencial">18x de R$</span> 
                        <span class="valorCDesconto">${menorValor.toFixed(2).replace('.', ',')}</span><div class="pula"></div>
                        <span class="apenasEAD">Até o final do curso.</span>
                        <h6 class="carga">Carga horária:</h6>
                        <p class="conteudoBox"><span class="cargaHoraria">${data.resumo['carga-horaria']}</span><span> horas</span></p>
                        <h6 class="unidades">Unidades:</h6>
                        ${[...new Set(data.investimentos.map(i => i.unidade))].join(' | ')}
                    `;
                } else {
                    box.remove();
                    // box.querySelector('.apiGets').innerHTML = '<p>Em breve.</p>';
                }
            })
            .catch(error => {
                box.remove();
                // console.error('Erro:', error);
                // box.querySelector('.apiGets').innerHTML = '<p>Erro ao carregar dados.</p>';
            });
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const tops = document.querySelectorAll('.innerProcurado');
    tops.forEach(top => {
        const mneumonicotop = top.getAttribute('data-mneumonico-top');
        if (mneumonicotop) {
            fetch(`http://127.0.0.1/novo-pos/wp-content/themes/twentyseventeen/getAPI.php?mneumonico=${mneumonicotop}`)
            .then(response => response.json())
            .then(data => {
                if (data.investimentos) {
                    const menorValor = Math.min(...data.investimentos.map(i => i.valor));
                    const valorIntegral = (menorValor / 40) * 100;
                    top.querySelector('.valorTop10').innerHTML = `
                        <span class="valorCDescontoTop">${menorValor.toFixed(2).replace('.', ',')}</span>
                    `;

                    const categorias = document.querySelectorAll(".categoriaTop");
                    for(let categoria of categorias) {
                        if(categoria.innerHTML == "100% Digital") {
                            $(categoria).parent().parent().parent().parent().find(".apenasEADTop").show();
                            $(categoria).parent().parent().parent().parent().css("background"," #E5457A");
                            $(categoria).css("color"," #E5457A");
                        } else if(categoria.innerHTML == "WEBCONFERÊNCIA"){
                            $(categoria).parent().parent().parent().parent().find(".apenasPresencialTop").show();
                            $(categoria).parent().parent().parent().parent().css("background"," #7D378D");
                            $(categoria).css("color"," #7D378D");
                            $(categoria).parent().css("right"," 50px");
                        } else {
                            $(categoria).parent().parent().parent().parent().find(".apenasPresencialTop").show();
                            $(categoria).parent().parent().parent().parent().css("background"," #076B8F");
                            $(categoria).css("color"," #076B8F");
                        }
                    }
                } 
                else {
                    top.remove();
                }
            })
            .catch(error => {
                top.remove();
            });
        }
    });
});
// controle dos filtros da busca 
document.addEventListener('DOMContentLoaded', function() {
    const boxes = document.querySelectorAll('.box-item');
    const areaInteresseSelect = document.getElementById('areaInteresse');
    const nomeCursoSelect = document.getElementById('areaNomeCurso');
    const modalidadeSelect = document.getElementById('modalidade');

    function updateNomeCursoOptions() {
        const selectedCategoria = areaInteresseSelect.value;
        nomeCursoSelect.innerHTML = '<option value="">Todos</option>';
        const filteredCursos = new Set();

        boxes.forEach(box => {
            const boxCategorias = Array.from(box.querySelectorAll('.categoria')).map(cat => cat.textContent.trim());
            const boxCurso = box.querySelector('.titleBox a').textContent.trim();

            if (!selectedCategoria || boxCategorias.includes(selectedCategoria)) {
                filteredCursos.add(boxCurso);
            }
        });

        Array.from(filteredCursos).sort().forEach(curso => {
            const option = document.createElement('option');
            option.value = curso;
            option.textContent = curso;
            nomeCursoSelect.appendChild(option);
        });
    }

    function updateModalidadeOptions() {
        const selectedCategoria = areaInteresseSelect.value;
        const selectedCurso = nomeCursoSelect.value;
        modalidadeSelect.innerHTML = '<option value="">Todas</option>';
        const filteredModalidades = new Set();

        boxes.forEach(box => {
            const boxCategorias = Array.from(box.querySelectorAll('.categoria')).map(cat => cat.textContent.trim());
            const boxCurso = box.querySelector('.titleBox a').textContent.trim();
            const boxModalidade = box.querySelector('.innerMod').textContent.trim();

            if ((!selectedCategoria || boxCategorias.includes(selectedCategoria)) &&
                (!selectedCurso || boxCurso === selectedCurso)) {
                filteredModalidades.add(boxModalidade);
            }
        });

        Array.from(filteredModalidades).sort().forEach(mod => {
            const option = document.createElement('option');
            option.value = mod;
            option.textContent = mod;
            modalidadeSelect.appendChild(option);
        });
    }

    areaInteresseSelect.addEventListener('change', () => {
        updateNomeCursoOptions();
        updateModalidadeOptions();
        filterBoxes();
        clearClean();
    });

    nomeCursoSelect.addEventListener('change', () => {
        updateModalidadeOptions();
        filterBoxes();
        clearClean();
    });

    modalidadeSelect.addEventListener('change', () => {
       if(modalidadeSelect.value == "PRESENCIAL") {
            $(".selectUnidade").fadeIn();
       } else {
            $(".selectUnidade").fadeOut();
        };
    });

    const limparFiltrosBtn = document.getElementById('limparFiltros');

    const categorias = new Set();
    const cursos = new Set();
    const modalidades = new Set();

    boxes.forEach(box => {
        const categoriasBox = box.querySelectorAll('.categoria');
        categoriasBox.forEach(cat => {
            const catName = cat.textContent.trim();
            if (!['PRESENCIAL','Presencial', 'Webconferência', 'EAD', 'Online', 'WEBCONFERÊNCIA', '100% Digital'].includes(catName)) {
                categorias.add(catName);
            }
        });
        cursos.add(box.querySelector('.titleBox a').textContent.trim());
        modalidades.add(box.querySelector('.innerMod').textContent.trim());
    });

    Array.from(categorias).sort().forEach(cat => {
        const option = document.createElement('option');
        option.value = cat;
        option.textContent = cat;
        areaInteresseSelect.appendChild(option);
    });

    Array.from(cursos).sort().forEach(curso => {
        const option = document.createElement('option');
        option.value = curso;
        option.textContent = curso;
        nomeCursoSelect.appendChild(option);
    });

    Array.from(modalidades).sort().forEach(mod => {
        const option = document.createElement('option');
        option.value = mod;
        option.textContent = mod;
        modalidadeSelect.appendChild(option);
    });

    function filterBoxes() {
        const selectedCategoria = areaInteresseSelect.value;
        const selectedCurso = nomeCursoSelect.value;
        const selectedModalidade = modalidadeSelect.value;

        boxes.forEach(box => {
            const boxCategorias = Array.from(box.querySelectorAll('.categoria')).map(cat => cat.textContent.trim());
            const boxCurso = box.querySelector('.titleBox a').textContent.trim();
            const boxModalidade = box.querySelector('.innerMod').textContent.trim();

            let show = true;

            if (selectedCategoria && !boxCategorias.includes(selectedCategoria)) {
                show = false;
            }

            if (selectedCurso && boxCurso !== selectedCurso) {
                show = false;
            }

            if (selectedModalidade && boxModalidade !== selectedModalidade) {
                show = false;
            }

            box.style.display = show ? 'inline-block' : 'none';
        });
    }

    areaInteresseSelect.addEventListener('change', filterBoxes);
    nomeCursoSelect.addEventListener('change', filterBoxes);
    modalidadeSelect.addEventListener('change', filterBoxes);
    limparFiltrosBtn.addEventListener('click', () => {
        areaInteresseSelect.value = '';
        nomeCursoSelect.value = '';
        modalidadeSelect.value = '';
        filterBoxes();
        document.getElementById("findCurso").value = "";
    });
});

// limpa option se estiver vazio
function clearClean() {
    const options = document.querySelectorAll('option');
    for(let option of options) {
        if(option.textContent == "") {
            option.remove();
        }
    }
}

// controle das cores dos boxes individualizando por modalidade 
function coresBox() {
    const colorsControl = document.querySelectorAll(".innerMod span");
    for(let colorControl of colorsControl) {
        if(colorControl.textContent == "100% Digital") {
            colorControl.parentNode.classList.add("innerRed");
            colorControl.parentNode.parentElement.children[0].classList.add("bgRed");
            colorControl.parentNode.parentElement.children[1].classList.add("colorRed");
            setTimeout(() => {
                $(".loading").hide();
                $(colorControl).parent().parent().find(".partir").addClass("colorRed");
                $(colorControl).parent().parent().find(".carga").addClass("colorRed");
                $(colorControl).parent().parent().find(".unidades").html("Polos Digitais:");
                $(colorControl).parent().parent().find(".unidades").addClass("colorRed");
                $(colorControl).parent().parent().find(".apenasPresencial").hide();
                $(colorControl).parent().parent().find(".apenasEAD").show();
                $(".valorCDesconto").show();
            }, 3000);
        } 
        if(colorControl.textContent == "PRESENCIAL") {
            colorControl.parentNode.classList.add("innerGreen");
            colorControl.parentNode.parentElement.children[0].classList.add("bgGreen");
            colorControl.parentNode.parentElement.children[1].classList.add("colorGreen");
            setTimeout(() => {
                $(".loading").hide();
                $(colorControl).parent().parent().find(".partir").addClass("colorGreen");
                $(colorControl).parent().parent().find(".carga").addClass("colorGreen");
                $(colorControl).parent().parent().find(".unidades").addClass("colorGreen");
                $(colorControl).parent().parent().find(".apenasEAD").hide();
                $(colorControl).parent().parent().find(".apenasPresencial").show();
                $(".valorCDesconto").show();
            }, 3000);
        } 
        if(colorControl.textContent == "WEBCONFERÊNCIA") {
            colorControl.parentNode.classList.add("innerPurple");
            colorControl.parentNode.parentElement.children[0].classList.add("bgPurple");
            colorControl.parentNode.parentElement.children[1].classList.add("colorPurple");
            setTimeout(() => {
                $(".loading").hide();
                $(colorControl).parent().parent().find(".partir").addClass("colorPurple");
                $(colorControl).parent().parent().find(".carga").addClass("colorPurple");
                $(colorControl).parent().parent().find(".unidades").addClass("colorPurple");
                $(colorControl).parent().parent().find(".apenasEAD").hide();
                $(colorControl).parent().parent().find(".apenasPresencial").show();
                $(".valorCDesconto").show();
            }, 3000);
        } 
    }
}

window.onload = function() {
    coresBox();
    
    // seleção dos cards pelo nome no buscar 
    // versão clicando
    document.getElementById('btnFindCurso').addEventListener('click', function() {
        var searchQuery = document.getElementById('findCurso').value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        var boxItems = document.querySelectorAll('.box-item');
        
        boxItems.forEach(function(item) {
            var title = item.querySelector('.titleBox').textContent.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            if (title.includes(searchQuery)) {
                item.style.display = 'inline-block';
            } else {
                item.style.display = 'none';
            }
        });
    });
    
    // versão digitando
    document.getElementById('findCurso').addEventListener('input', function() {
        var searchQuery = this.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        var boxItems = document.querySelectorAll('.box-item');
        
        boxItems.forEach(function(item) {
            var title = item.querySelector('.titleBox').textContent.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            if (title.includes(searchQuery)) {
                item.style.display = 'inline-block';
            } else {
                item.style.display = 'none';
            }
        });
    });

    function verMais() {
        const btnVerMais = document.querySelector(".btnVerMaisCursos");
        const areaCursos = document.querySelector(".box-container");
        let currentHeight = 800;

        btnVerMais.addEventListener("click", function() {
            currentHeight += 800;
            areaCursos.style.maxHeight = `${currentHeight}px`;

            if (areaCursos.scrollHeight <= currentHeight) {
                btnVerMais.style.display = 'none';
            }
        });

        coresBox();
    }

    // document.800uerySelectorAll('.titleBox a').forEach(title => {
    //     if (title.textContent.length > 45) {
    //         $(title).parent().find(".pontinhos").show();
    //     }
    // });

    clearClean();
    verMais();
    // $(".wrapPolosD").click(function(){
    //     $(".wrapPolos").slideToggle();
    // });
}

function removeInfinityBoxes() {
    const boxes = document.querySelectorAll('.box-item');
    boxes.forEach(box => {
        const valorCDesconto = box.querySelector('.valorCDesconto');
        if (valorCDesconto && valorCDesconto.textContent.includes('Infinity')) {
            box.remove();
        }
    });
}

$(document).scroll(function(){
    coresBox();
    removeInfinityBoxes();
});

document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const boxes = document.querySelectorAll('.box-item');
        const unidadeSelect = document.getElementById('unidade');

        const unidades = new Set();

        boxes.forEach(box => {
            const modalidade = box.querySelector('.innerMod').textContent.trim();
            if (modalidade === 'PRESENCIAL') {
                const unidade = box.querySelector('.unidades').textContent.trim();
                unidades.add(unidade);
                console.log(unidade);
            }
        });
        
        Array.from(unidades).sort().forEach(unidade => {
            const option = document.createElement('option');
            option.value = unidade;
            option.textContent = unidade;
            unidadeSelect.appendChild(option);
        });
    }, 4000);
});