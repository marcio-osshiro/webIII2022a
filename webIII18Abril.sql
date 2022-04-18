--
-- PostgreSQL database dump
--

-- Dumped from database version 11.10 (Debian 11.10-1.pgdg100+1)
-- Dumped by pg_dump version 13.1 (Debian 13.1-1.pgdg100+1)

-- Started on 2022-04-18 11:45:26 -04

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

--
-- TOC entry 199 (class 1259 OID 20046)
-- Name: area; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.area (
    id integer NOT NULL,
    descricao character varying(100)
);


ALTER TABLE public.area OWNER TO postgres;

--
-- TOC entry 198 (class 1259 OID 20044)
-- Name: area_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.area_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.area_id_seq OWNER TO postgres;

--
-- TOC entry 2941 (class 0 OID 0)
-- Dependencies: 198
-- Name: area_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.area_id_seq OWNED BY public.area.id;


--
-- TOC entry 203 (class 1259 OID 20630)
-- Name: categoria; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.categoria (
    id integer NOT NULL,
    descricao character varying(100)
);


ALTER TABLE public.categoria OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 20628)
-- Name: categoria_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.categoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categoria_id_seq OWNER TO postgres;

--
-- TOC entry 2942 (class 0 OID 0)
-- Dependencies: 202
-- Name: categoria_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;


--
-- TOC entry 197 (class 1259 OID 19995)
-- Name: professor; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.professor (
    id integer NOT NULL,
    nome character varying(100),
    email character varying(100),
    fone character varying(100),
    area_id integer
);


ALTER TABLE public.professor OWNER TO postgres;

--
-- TOC entry 196 (class 1259 OID 19993)
-- Name: professor_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.professor_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.professor_id_seq OWNER TO postgres;

--
-- TOC entry 2943 (class 0 OID 0)
-- Dependencies: 196
-- Name: professor_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.professor_id_seq OWNED BY public.professor.id;


--
-- TOC entry 201 (class 1259 OID 20059)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    email character varying(100),
    senha character varying(32),
    nome character varying(100)
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 200 (class 1259 OID 20057)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO postgres;

--
-- TOC entry 2944 (class 0 OID 0)
-- Dependencies: 200
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 2794 (class 2604 OID 20049)
-- Name: area id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.area ALTER COLUMN id SET DEFAULT nextval('public.area_id_seq'::regclass);


--
-- TOC entry 2796 (class 2604 OID 20633)
-- Name: categoria id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria ALTER COLUMN id SET DEFAULT nextval('public.categoria_id_seq'::regclass);


--
-- TOC entry 2793 (class 2604 OID 19998)
-- Name: professor id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.professor ALTER COLUMN id SET DEFAULT nextval('public.professor_id_seq'::regclass);


--
-- TOC entry 2795 (class 2604 OID 20062)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 2931 (class 0 OID 20046)
-- Dependencies: 199
-- Data for Name: area; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.area VALUES (1, 'Desenvolvimento Web');
INSERT INTO public.area VALUES (3, 'Engenharia de Software');
INSERT INTO public.area VALUES (4, 'Desenvolvimento e Linguagem de Programação');
INSERT INTO public.area VALUES (6, 'Inteligencia Artificial x Inteligencia Real');
INSERT INTO public.area VALUES (8, 'Redes');
INSERT INTO public.area VALUES (2, 'Banco de Dados');


--
-- TOC entry 2935 (class 0 OID 20630)
-- Dependencies: 203
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.categoria VALUES (1, 'Atualidade');
INSERT INTO public.categoria VALUES (2, 'Tecnologia');
INSERT INTO public.categoria VALUES (3, 'Lazer');
INSERT INTO public.categoria VALUES (4, 'Esporte');


--
-- TOC entry 2929 (class 0 OID 19995)
-- Dependencies: 197
-- Data for Name: professor; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.professor VALUES (3, 'Osshiro', 'osshiro@gmail.com', '3333', 1);
INSERT INTO public.professor VALUES (9, 'jiyan', 'jiyan@gmail.com', '1234', 8);
INSERT INTO public.professor VALUES (11, 'Thales', 'thales@gmail.com', '1234-5678', 2);
INSERT INTO public.professor VALUES (1, 'Fulano de Souza', 'fulano@gmail.com', '1234', 3);
INSERT INTO public.professor VALUES (20, 'professor teste 20', 'pteste20@gmail.com', '2020', 4);
INSERT INTO public.professor VALUES (21, 'prof1703 b', 'prof1703b@gmail.com', '1703', 6);
INSERT INTO public.professor VALUES (10, ' Beltrano da Silva 10', 'beltrano@gmail.com', '3333', 2);
INSERT INTO public.professor VALUES (22, 'laravel', 'laravel@gmail.com', '1234', 2);
INSERT INTO public.professor VALUES (23, 'prof Xavier', 'xavier@gmail.com', '1234', 2);
INSERT INTO public.professor VALUES (24, 'pro1', 'pro1@gmail.com', '1111-9999', 2);


--
-- TOC entry 2933 (class 0 OID 20059)
-- Dependencies: 201
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.usuario VALUES (1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin');


--
-- TOC entry 2945 (class 0 OID 0)
-- Dependencies: 198
-- Name: area_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.area_id_seq', 10, true);


--
-- TOC entry 2946 (class 0 OID 0)
-- Dependencies: 202
-- Name: categoria_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categoria_id_seq', 4, true);


--
-- TOC entry 2947 (class 0 OID 0)
-- Dependencies: 196
-- Name: professor_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.professor_id_seq', 24, true);


--
-- TOC entry 2948 (class 0 OID 0)
-- Dependencies: 200
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);


--
-- TOC entry 2800 (class 2606 OID 20051)
-- Name: area area_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.area
    ADD CONSTRAINT area_pkey PRIMARY KEY (id);


--
-- TOC entry 2806 (class 2606 OID 20635)
-- Name: categoria categoria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id);


--
-- TOC entry 2802 (class 2606 OID 20066)
-- Name: usuario ind_usuario_email; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT ind_usuario_email UNIQUE (email);


--
-- TOC entry 2798 (class 2606 OID 20000)
-- Name: professor professor_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.professor
    ADD CONSTRAINT professor_pkey PRIMARY KEY (id);


--
-- TOC entry 2804 (class 2606 OID 20064)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


-- Completed on 2022-04-18 11:45:26 -04

--
-- PostgreSQL database dump complete
--

